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
URL         : https://dandy-movie.000webhostapp.com/public/register
Requirement : name, email, password

3. Logout
Method      : POST 
URL         : https://dandy-movie.000webhostapp.com/public/logout
Requirement : Bearer Token

4. Profile ( Melihat detail user yang login )
Method      : GET 
URL         : https://dandy-movie.000webhost.com/public/profile
Requirement : Bearer Token


---------------------------------------------------------------------------------------------------------

NOTE : Untuk mengakses kesulurah API dibawah harus memiliki token terlebih dahulu dengan cara login
 

5. All Data ( Movie )
Method      : GET 
URL         : https://dandy-movie.000webhost.com/public/movie
Requirement : 

6. Detail Data ( Movie )
Method      : GET 
URL         : https://dandy-movie.000webhost.com/public/movie/{endpoint}
Requirement : endpoint

7. Create ( Movie )
Method      : POST 
URL         : https://dandy-movie.000webhost.com/public/movie/
Requirement : name, price, date, desc, category

8. Delete ( Movie )
Method      : DELETE 
URL         : https://dandy-movie.000webhost.com/public/movie/{endpoint}
Requirement : endpoint

9. Update ( Movie )
Method      : UPDATE 
URL         : https://dandy-movie.000webhost.com/public/movie/{endpoint}
Requirement : name, price, date, desc, category

10. Filter by Price ( Movie )
Method      : GET 
URL         : https://dandy-movie.000webhost.com/public/movie/filter/price
Requirement : paginate, priceMax, priceMin

11. Filter by Category ( Movie )
Method      : GET 
URL         : https://dandy-movie.000webhost.com/public/movie/filter/category
Requirement : paginate, category



12. All Data ( Cart )
Method      : GET 
URL         : https://dandy-movie.000webhost.com/public/cart
Requirement : 

13. Create ( Cart )
Method      : POST 
URL         : https://dandy-movie.000webhost.com/public/cart
Requirement : movie_id, booking_date

14. Delete ( Cart )
Method      : DELETE
URL         : https://dandy-movie.000webhost.com/public/cart/{endpoint}
Requirement : endpoint
