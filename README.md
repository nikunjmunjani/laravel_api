
## Database Laravel
- Create database name with "laravel_api".

 **Note**: You can skip below step as empty database will nbe create in next step using command. 
 -  Check root folder inside "laravel_api.sql" Database. Import in phpmyadmin.

## Installation Laravel


- Extract Folder in any directory.
- Go inside Extract Folder and open the command prompt and run below command.
- composer install 
- php artisan serve
- php artisan migrate
- php artisan passport:install

## API Setup

1.  Register User
**URL : ** http://localhost:8000/api/register
**Type : ** POST
**Parameters : ** 
		first_name
		last_name
		email
		password
		confirm_password
**Output : ** Success or error message.

2.  Login User
**URL : ** http://localhost:8000/api/login
**Type : ** POST
**Parameters : ** 
		email
		password
**Output : ** Success or error message. If success then it will return access token. Please store that access token some where. As it will be used to access other APIs.

3.  Category List
**URL : ** http://localhost:8000/api/category
**Type : ** GET
**Header : ** 
		Authorization : Bearer {{access_token}}
**Output : ** Success or error message. If success then it will return categories with sub categories.

4.  Add Category
**URL : ** http://localhost:8000/api/category
**Type : ** POST
**Header : ** 
		Authorization : Bearer {{access_token}}
**Parameters : ** 
		name : Category name
		parent_id : (Optional) Defualt value  0.
**Output : ** Success or error message. 

5.  Get Individual Category
**URL : ** http://localhost:8000/api/category/{{category_id}}
**Type : ** POST
**Header : ** 
		Authorization : Bearer {{access_token}}
**Output : ** Success or error message.  If success it will return category data.

6.  Update Category
**URL : ** http://localhost:8000/api/category/{{category_id}}
**Type : ** PUT
**Header : ** 
		Authorization : Bearer {{access_token}}
**Parameters : ** 
		name : Category name
**Output : ** Success or error message.  

7.  Delete Category
**URL : ** http://localhost:8000/api/category/{{category_id}}
**Type : ** DELETE
**Header : ** 
		Authorization : Bearer {{access_token}}
**Output : ** Success or error message.  

8.  Product List
**URL : ** http://localhost:8000/api/product
**Type : ** GET
**Header : ** 
		Authorization : Bearer {{access_token}}
**Output : ** Success or error message. If success then it will return Product data.

9.  Add Product
**URL : ** http://localhost:8000/api/product
**Type : ** POST
**Header : ** 
		Authorization : Bearer {{access_token}}
**Parameters : ** 
		name : Product name
		price : Product price
		category_id : Category ID
**Output : ** Success or error message. 

10.  Get Individual Product
**URL : ** http://localhost:8000/api/product/{{product_id}}
**Type : ** POST
**Header : ** 
		Authorization : Bearer {{access_token}}
**Output : ** Success or error message.  If success it will return Product data.

11.  Update Product
**URL : ** http://localhost:8000/api/product/{{product_id}}
**Type : ** PUT
**Header : ** 
		Authorization : Bearer {{access_token}}
**Parameters : ** 
		name : Product name
		price : (Optional)Product price
		category_id : (Optional)Category ID
**Output : ** Success or error message.  

12.  Delete Product
**URL : ** http://localhost:8000/api/product/{{product_id}}
**Type : ** DELETE
**Header : ** 
		Authorization : Bearer {{access_token}}
**Output : ** Success or error message.  