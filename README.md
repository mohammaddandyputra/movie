Theme      : Movie App
Framework  : Laravel Lumen
Auth       : JWT

REST API mengelola jadwal film dan pemesanan film

1. Sign In
Method      : POST 
URL         : https://dandy-movie.000webhostapp.com/public/login
Requirement : email, password

2. Register Akun
Method      : POST 
URL         : http://movie.000webhost.com/register
Requirement : name, email, password

3. Logout
Method      : POST 
URL         : http://movie.000webhost.com/logout
Requirement : Bearer Token

4. Profile ( Melihat detail user yang login )
Method      : GET 
URL         : http://movie.000webhost.com/profile
Requirement : Bearer Token


---------------------------------------------------------------------------------------------------------

NOTE : Untuk mengakses kesulurah API dibawah harus memiliki token terlebih dahulu dengan cara login
 

5. All Data ( Movie )
Method      : GET 
URL         : http://movie.000webhost.com/movie
Requirement : 

6. Detail Data ( Movie )
Method      : GET 
URL         : http://movie.000webhost.com/movie/{endpoint}
Requirement : endpoint

7. Create ( Movie )
Method      : POST 
URL         : http://movie.000webhost.com/movie/
Requirement : name, price, date, desc, category

8. Delete ( Movie )
Method      : DELETE 
URL         : http://movie.000webhost.com/movie/{endpoint}
Requirement : endpoint

9. Update ( Movie )
Method      : UPDATE 
URL         : http://movie.000webhost.com/movie/{endpoint}
Requirement : name, price, date, desc, category

10. Filter by Price ( Movie )
Method      : GET 
URL         : http://movie.000webhost.com/movie/filter/price
Requirement : paginate, priceMax, priceMin

11. Filter by Category ( Movie )
Method      : GET 
URL         : http://movie.000webhost.com/movie/filter/category
Requirement : paginate, category



12. All Data ( Cart )
Method      : GET 
URL         : http://movie.000webhost.com/cart
Requirement : 

13. Create ( Cart )
Method      : POST 
URL         : http://movie.000webhost.com/cart
Requirement : movie_id, booking_date

14. Delete ( Cart )
Method      : DELETE
URL         : http://movie.000webhost.com/cart/{endpoint}
Requirement : endpoint