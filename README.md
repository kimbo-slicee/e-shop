```grqhl
    project/
    │
    ├── docker/
    │   ├── nginx/
    │   │   └── default.conf
    │   ├── php/
    │   │   └── Dockerfile
    │   ├── postgres/
    │
    │
    ├── public/                     # entry point
    │   ├── index.php
    │   ├── assets/
    │
    ├── app/
    │   │
    │   ├── Config/
    │   │   ├── Database.php
    │   │   ├── routes.php
    │   │
    │   ├── Core/
    │   │   ├── Router.php
    │   │   ├── Controller.php
    │   │   ├── Request.php
    │   │   ├── Response.php
    │   │
    │   ├── Controllers/
    │   │   ├── ProductController.php
    │   │   ├── AuthController.php
    │   │
    │   ├── Services/
    │   │   ├── ProductService.php
    │   │   ├── AuthService.php
    │   │
    │   ├── Repositories/
    │   │   ├── ProductRepository.php
    │   │   ├── UserRepository.php
    │   │
    │   ├── Models/
    │   │   ├── Product.php
    │   │   ├── User.php
    │   │
    │   ├── Dtos/
    │   │   ├── ProductDTO.php
    │   │
    │   ├── Validators/
    │   │   ├── ProductValidator.php
    │   │
    │   ├── Helpers/
    │   │   ├── Debug.php
    │   │   ├── ResponseHelper.php
    │   │
    │   └── Views/
    │       ├── layouts/
    │       ├── partials/
    │       ├── products/
    │       ├── auth/
    │
    ├── routes/
    │   ├── web.php
    │   ├── api.php
    │
    ├── storage/
    │   ├── logs/
    │
    ├── vendor
    ├── composer.json
    ├── docker-compose.yml
    └── .htaccess
   
```