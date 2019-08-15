---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#Products

APIs for products
<!-- START_4157e0edf1bceccf85f04a2d1851670c -->
## Get all products

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/products" 
```

```javascript
const url = new URL("http://localhost/api/v1/products");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": [
        {
            "id": 1,
            "name": "Product 2ufrC 2837",
            "price": "152.00",
            "created_at": "2019-08-15 21:33:33",
            "updated_at": "2019-08-15 22:02:26",
            "status": "In Stock"
        },
        {
            "id": 2,
            "name": "Product E727O 1640",
            "price": "1310.00",
            "created_at": "2019-08-15 21:33:33",
            "updated_at": "2019-08-15 21:33:33",
            "status": "Out Of Stock"
        },
        {
            "id": 3,
            "name": "Product AZSEJ 4108",
            "price": "3583.00",
            "created_at": "2019-08-15 21:33:33",
            "updated_at": "2019-08-15 21:33:33",
            "status": "Out Of Stock"
        },
        {
            "id": 4,
            "name": "Product VlGJx 303",
            "price": "1589.00",
            "created_at": "2019-08-15 21:33:33",
            "updated_at": "2019-08-15 21:33:33",
            "status": "In Stock"
        },
        {
            "id": 5,
            "name": "Product cn5N3 9191",
            "price": "1788.00",
            "created_at": "2019-08-15 21:33:33",
            "updated_at": "2019-08-15 21:33:33",
            "status": "In Stock"
        },
        {
            "id": 6,
            "name": "Product IL484 4263",
            "price": "2181.00",
            "created_at": "2019-08-15 21:33:33",
            "updated_at": "2019-08-15 21:33:33",
            "status": "In Stock"
        },
        {
            "id": 7,
            "name": "Product Bh6B4 999",
            "price": "3942.00",
            "created_at": "2019-08-15 21:33:33",
            "updated_at": "2019-08-15 21:33:33",
            "status": "Out Of Stock"
        },
        {
            "id": 8,
            "name": "Product bx0gx 3624",
            "price": "2328.00",
            "created_at": "2019-08-15 21:33:33",
            "updated_at": "2019-08-15 21:33:33",
            "status": "Out Of Stock"
        },
        {
            "id": 9,
            "name": "Product poiBe 4206",
            "price": "2311.00",
            "created_at": "2019-08-15 21:33:33",
            "updated_at": "2019-08-15 21:33:33",
            "status": "In Stock"
        },
        {
            "id": 10,
            "name": "Product v9YSD 8861",
            "price": "1510.00",
            "created_at": "2019-08-15 21:33:33",
            "updated_at": "2019-08-15 21:33:33",
            "status": "In Stock"
        },
        {
            "id": 11,
            "name": "Product 3NFDO 7001",
            "price": "1087.00",
            "created_at": "2019-08-15 21:33:33",
            "updated_at": "2019-08-15 21:33:33",
            "status": "In Stock"
        },
        {
            "id": 12,
            "name": "Product nyCAM 5552",
            "price": "838.00",
            "created_at": "2019-08-15 21:33:33",
            "updated_at": "2019-08-15 21:33:33",
            "status": "In Stock"
        },
        {
            "id": 13,
            "name": "Product I9jmr 1446",
            "price": "1537.00",
            "created_at": "2019-08-15 21:33:33",
            "updated_at": "2019-08-15 21:33:33",
            "status": "In Stock"
        },
        {
            "id": 14,
            "name": "Product Fd9P0 9853",
            "price": "1320.00",
            "created_at": "2019-08-15 21:33:33",
            "updated_at": "2019-08-15 21:33:33",
            "status": "In Stock"
        },
        {
            "id": 15,
            "name": "Product vjLho 106",
            "price": "937.00",
            "created_at": "2019-08-15 21:33:33",
            "updated_at": "2019-08-15 21:33:33",
            "status": "Out Of Stock"
        },
        {
            "id": 16,
            "name": "Product iJukX 8251",
            "price": "2297.00",
            "created_at": "2019-08-15 21:33:33",
            "updated_at": "2019-08-15 21:33:33",
            "status": "Out Of Stock"
        },
        {
            "id": 17,
            "name": "Product FZxdy 2629",
            "price": "446.00",
            "created_at": "2019-08-15 21:33:33",
            "updated_at": "2019-08-15 21:33:33",
            "status": "In Stock"
        },
        {
            "id": 18,
            "name": "Product OKkaC 1585",
            "price": "2742.00",
            "created_at": "2019-08-15 21:33:33",
            "updated_at": "2019-08-15 21:33:33",
            "status": "In Stock"
        },
        {
            "id": 19,
            "name": "Product szL4I 496",
            "price": "4391.00",
            "created_at": "2019-08-15 21:33:33",
            "updated_at": "2019-08-15 21:33:33",
            "status": "Out Of Stock"
        },
        {
            "id": 20,
            "name": "Product ScDF6 2061",
            "price": "2925.00",
            "created_at": "2019-08-15 21:33:33",
            "updated_at": "2019-08-15 21:33:33",
            "status": "In Stock"
        },
        {
            "id": 21,
            "name": "Product Aakvg 863",
            "price": "4732.00",
            "created_at": "2019-08-15 21:33:33",
            "updated_at": "2019-08-15 21:33:33",
            "status": "In Stock"
        },
        {
            "id": 22,
            "name": "Product aDENm 5032",
            "price": "3828.00",
            "created_at": "2019-08-15 21:33:33",
            "updated_at": "2019-08-15 21:33:33",
            "status": "In Stock"
        },
        {
            "id": 23,
            "name": "Product tKQ2q 7796",
            "price": "4225.00",
            "created_at": "2019-08-15 21:33:33",
            "updated_at": "2019-08-15 21:33:33",
            "status": "Out Of Stock"
        },
        {
            "id": 24,
            "name": "Product GbavH 9360",
            "price": "3167.00",
            "created_at": "2019-08-15 21:33:33",
            "updated_at": "2019-08-15 21:33:33",
            "status": "In Stock"
        },
        {
            "id": 25,
            "name": "Product oJgbL 4616",
            "price": "2061.00",
            "created_at": "2019-08-15 21:33:33",
            "updated_at": "2019-08-15 21:33:33",
            "status": "Out Of Stock"
        },
        {
            "id": 26,
            "name": "Product iQ4Ql 8775",
            "price": "4251.00",
            "created_at": "2019-08-15 21:33:33",
            "updated_at": "2019-08-15 21:33:33",
            "status": "Out Of Stock"
        },
        {
            "id": 27,
            "name": "Product lU9uO 5838",
            "price": "4567.00",
            "created_at": "2019-08-15 21:33:33",
            "updated_at": "2019-08-15 21:33:33",
            "status": "In Stock"
        },
        {
            "id": 28,
            "name": "Product UONPg 6050",
            "price": "2657.00",
            "created_at": "2019-08-15 21:33:33",
            "updated_at": "2019-08-15 21:33:33",
            "status": "Out Of Stock"
        },
        {
            "id": 29,
            "name": "Product qUp1L 1354",
            "price": "2485.00",
            "created_at": "2019-08-15 21:33:33",
            "updated_at": "2019-08-15 21:33:33",
            "status": "In Stock"
        },
        {
            "id": 30,
            "name": "Product O8Cfn 1956",
            "price": "1327.00",
            "created_at": "2019-08-15 21:33:33",
            "updated_at": "2019-08-15 21:33:33",
            "status": "Out Of Stock"
        },
        {
            "id": 31,
            "name": "Prod3432a1450497",
            "price": "1459.36",
            "created_at": "2019-08-15 22:02:26",
            "updated_at": "2019-08-15 22:02:26",
            "status": "In Stock"
        }
    ]
}
```

### HTTP Request
`GET api/v1/products`


<!-- END_4157e0edf1bceccf85f04a2d1851670c -->

<!-- START_86273cbd66e2e23f9d909ea894736160 -->
## Search product

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/products/search?term=debitis&in_stock=omnis" 
```

```javascript
const url = new URL("http://localhost/api/v1/products/search");

    let params = {
            "term": "debitis",
            "in_stock": "omnis",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "in_stock": [
            "The in stock field must be true or false."
        ]
    }
}
```

### HTTP Request
`GET api/v1/products/search`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    term |  optional  | Example: api/v1/products/search?term=iphone7
    in_stock |  optional  | Example: api/v1/products/search?term=iphone7&in_stock=1 (1 or 0)

<!-- END_86273cbd66e2e23f9d909ea894736160 -->

<!-- START_94601b4296b6bc41a020e27601eb2552 -->
## Store product

> Example request:

```bash
curl -X POST "http://localhost/api/v1/product/store" \
    -H "Content-Type: application/json" \
    -d '{"name":"ex","price":7656276.11459,"in_stock":true}'

```

```javascript
const url = new URL("http://localhost/api/v1/product/store");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "ex",
    "price": 7656276.11459,
    "in_stock": true
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/product/store`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | Alphanumeric
    price | float |  required  | Two decimals number
    in_stock | boolean |  required  | 1 or 0, not "true" or "false

<!-- END_94601b4296b6bc41a020e27601eb2552 -->

<!-- START_d2527d8e334eb8b7184d5e2615b9ba2d -->
## Update product

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/product/1" \
    -H "Content-Type: application/json" \
    -d '{"name":"quidem","price":664668208.73269,"in_stock":true}'

```

```javascript
const url = new URL("http://localhost/api/v1/product/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "quidem",
    "price": 664668208.73269,
    "in_stock": true
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/product/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  optional  | Alphanumeric
    price | float |  optional  | Two decimals number
    in_stock | boolean |  optional  | 1 or 0, not "true" or "false

<!-- END_d2527d8e334eb8b7184d5e2615b9ba2d -->

<!-- START_b06a2bf2448221e7b091423e52cae82b -->
## Delete product

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/product/1" 
```

```javascript
const url = new URL("http://localhost/api/v1/product/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/product/{id}`


<!-- END_b06a2bf2448221e7b091423e52cae82b -->


