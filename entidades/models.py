from django.db import models

class User(models.Model):
    name = models.CharField(max_lenght=40, unique=True)
    
    
class Product(models.Model):
    
    name = models.CharField(max_lenght=20, unique=True)
    description = models.CharField(max_lenght=200, unique=True)
    value = models.IntegerField
    selled = models.BooleanField()
    
    
