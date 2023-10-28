from django.db import models
from django.contrib.auth.models import User
from django.contrib.auth.models import AbstractBaseUser, BaseUserManager, PermissionsMixin
from OL_2323 import settings

# Userモデルの主なフィールドとその特徴は以下のとおりです：
# username: ユーザー名。一意であり、ログインに使用されることが多い。
# first_name と last_name: ユーザーの名前と姓。
# email: ユーザーの電子メールアドレス。
# password: ハッシュ化されたパスワード。平文で保存されることはありません。
# date_joined: ユーザーが登録された日時。
# last_login: ユーザーが最後にログインした日時。
# is_active: ユーザーアカウントがアクティブかどうかを示すブールフィールド。
# is_staff: ユーザーが管理サイトにログインできるかどうかを示すブールフィールド。
# is_superuser: ユーザーがすべての権限を持つスーパーユーザーであるかどうかを示すブールフィールド。

#ユーザーテーブル
class CustomUserManager(BaseUserManager):
    def create_user(self, email, **extra_fields):
        if not email:
            raise ValueError('Email address is required')
        email = self.normalize_email(email)
        user = self.model(email=email, **extra_fields)
        user.save(using=self._db)
        return user

    def create_superuser(self, email, **extra_fields):
        extra_fields.setdefault('is_staff', True)
        extra_fields.setdefault('is_superuser', True)
        return self.create_user(email, **extra_fields)

class CustomUser(AbstractBaseUser, PermissionsMixin):
    email = models.EmailField(unique=True)
    address = models.CharField(max_length=255)
    name = models.CharField(max_length=255)
    age = models.PositiveIntegerField()
    phone_number = models.CharField(max_length=20)
    status = models.CharField(max_length=100)
    # user_id は自動
    USERNAME_FIELD = 'email'
    REQUIRED_FIELDS = ['name']

    objects = CustomUserManager()    

# チャットテーブル
class Chat(models.Model):
    sender = models.ForeignKey(settings.AUTH_USER_MODEL, related_name='sent_messages', on_delete=models.CASCADE)
    receiver = models.ForeignKey(settings.AUTH_USER_MODEL, related_name='received_messages', on_delete=models.CASCADE)
    timestamp = models.DateTimeField(auto_now_add=True)
    message = models.TextField()

    def __str__(self):
        return f"{self.sender} -> {self.receiver} @ {self.timestamp}"
    
# 条件タグテーブル

class ConditionTag(models.Model):
    STATUS_CHOICES = (
        (0, '農家'),
        (1, '後継者'),
    )
    
    status = models.IntegerField(choices=STATUS_CHOICES)
    name = models.CharField(max_length=255)
    
# farmerテーブル
class Farmer(models.Model):
    user = models.OneToOneField('CustomUser', on_delete=models.CASCADE)
    image_url = models.ImageField(upload_to='profile_images/')  # 画像のURLを保存
    introduction = models.TextField()
    condition_tag = models.ForeignKey('ConditionTag', on_delete=models.CASCADE, limit_choices_to={'status': 0})

# seekersテーブル
class Seeker(models.Model):
    user = models.OneToOneField('CustomUser', on_delete=models.CASCADE)
    introduction = models.TextField()
    background = models.TextField()
    condition_tag = models.ForeignKey('ConditionTag', on_delete=models.CASCADE, limit_choices_to={'status': 1})


#　条件タグ_user中間テーブル
class UserConditionTag(models.Model):
    user = models.ForeignKey('CustomUser', on_delete=models.CASCADE)
    condition_tag = models.ForeignKey('ConditionTag', on_delete=models.CASCADE)
 
# マッチングテーブル

class Matching(models.Model):
    user1 = models.ForeignKey('CustomUser', on_delete=models.CASCADE, related_name='user1_matchings')
    user2 = models.ForeignKey('CustomUser', on_delete=models.CASCADE, related_name='user2_matchings')
    MATCHING_STATUS_CHOICES = (
        (0, '農家のみ'),
        (1, '後継者のみ'),
        (2,'双方')
    )
    matching_status = models.IntegerField(choices=MATCHING_STATUS_CHOICES)
 