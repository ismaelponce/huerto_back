## About Huerto Back

Huerto back is a simple backend API made with Laravel. Some of the endpoints are:

- https://huertoback.com/products
- https://huertoback.com/product/1
- https://huertoback.com/articles
- https://huertoback.com/article/1

Most of the endpoints are not public.

## Auth

This backend uses Sanctum and JWT for authentication. Logged users can access more endpoints.

## Roles

There are three types of users. 

- Not logged users
- Logged users
- Admin

Logged users can access their history of products and previous orders.
Admin can CRUD articles, users, orders and products.

## License

Huerto Back is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
