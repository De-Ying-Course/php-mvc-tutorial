# Hướng dẫn PHP MVC

[Chuyển sang tài liệu Tiếng Anh](https://github.com/De-Ying-Course/php-mvc-tutorial/blob/main/README.md)

## Mẫu thiết kế MVC

![screenshot](./php_mvc_design_pattern.png)

## Kiến thức cần có

> Mô hình MVC (Mô hình - View - Controller)

```
1. Nắm vững kiến thức cơ bản về PHP
2. Kiến thức về viết lại URL
3. Biểu thức chính quy
    3.1. Apache: `.htaccess`
    3.2. Nginx: `cấu hình nginx`
4. Kiến thức về lập trình hướng đối tượng (OOP)
5. Làm chủ mô hình module (Pure Code)
6. Nội dung triển khai
    6.1. Định cấu hình Viết lại URL
    6.2. Tệp mã index.php
    6.3. Tệp mã bootstrap.php
    6.4. Bộ điều khiển mã
    6.5. Mô hình mã
    6.6. Lượt xem mã
    6.7. Tuyến đường mã
    6.8. Cơ sở dữ liệu mã
    6.9. tối ưu hóa ứng dụng
```

## Nội dung được chia sẻ

> Phần 1: Routes, Controllers

```
1. Tệp cấu hình `.htaccess`
2. Xử lý điều hướng (routes) - Gọi các controller tương ứng - `App.php`
3. Bộ điều khiển - Lớp & Hành động
```

> Phần 2: Models

```
1. models
2. core
     > Controller.php (Base Controller): Viết hàm xử lý
3. Tải mô hình vào bộ điều khiển
```

> Part 3: Views

```
1. views - Mỗi controller tương ứng với 1 module `view`
2. core
    > Controller.php (Base Controller): Viết hàm xử lý
        > Fnc render($view, $data=[])
3. Tải chế độ xem vào bộ điều khiển
```

> Part 4: Master Layout

```
1. Trích xuất dữ liệu thông qua bố cục
    > Gửi dữ liệu từ bên điều khiển sang bên xem qua bố cục yêu cầu mảng 2 chiều
2. public
    > assets
        > clients > css + fonts + images + js + ...
        > admin > ...
```
