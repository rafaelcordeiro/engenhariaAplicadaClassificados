from django.db import models
import entidades

class CadastrarProdutos(models.Model):
    
    productToInsert = entidades.models.Product
    
    
    