# Laravel Admin Panel

Một trang quản trị hiện đại được xây dựng bằng Laravel và Tailwind CSS để quản lý người dùng, sản phẩm và danh mục.

## Tính năng

-   Quản lý người dùng (CRUD)
-   Quản lý sản phẩm (CRUD)
-   Quản lý danh mục (CRUD)
-   Phân quyền theo vai trò (Admin/User)
-   Chức năng xóa mềm (Soft Delete) và thùng rác
-   Giao diện hiện đại và responsive
-   Dashboard hiển thị thống kê
-   Theo dõi hoạt động người dùng
-   Tìm kiếm và lọc dữ liệu nâng cao

## Yêu cầu hệ thống

-   PHP >= 8.1
-   Composer
-   Node.js & NPM
-   MySQL/PostgreSQL
-   Git

## Cài đặt

### Cách 1: Cài đặt nhanh với Docker (Khuyến nghị)

1. Cài đặt Docker và Docker Compose:

    - Windows/macOS: Tải và cài đặt [Docker Desktop](https://www.docker.com/products/docker-desktop)
    - Linux: Chạy các lệnh sau:

        ```bash
        # Cài đặt Docker
        curl -fsSL https://get.docker.com -o get-docker.sh
        sudo sh get-docker.sh

        # Cài đặt Docker Compose
        sudo curl -L "https://github.com/docker/compose/releases/download/v2.20.0/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
        sudo chmod +x /usr/local/bin/docker-compose
        ```

2. Kiểm tra cài đặt:

    ```bash
    docker --version
    docker-compose --version
    ```

3. Clone repository:

    ```bash
    git clone https://github.com/anpc33/LaravelPanel.git
    cd LaravelPanel
    ```

4. Chạy script cài đặt:
    ```bash
    chmod +x install.sh
    ./install.sh
    ```

### Cách 2: Cài đặt thủ công

### 1. Clone repository

```bash
git clone https://github.com/anpc33/LaravelPanel.git
cd LaravelPanel
```

### 2. Cài đặt các thư viện PHP

```bash
composer install
```

### 3. Cấu hình môi trường

```bash
# Copy file .env.example thành .env
cp .env.example .env

# Tạo key cho ứng dụng
# Key này được sử dụng để mã hóa dữ liệu nhạy cảm và tạo token bảo mật
php artisan key:generate
```

### 4. Cấu hình database

Mở file `.env` và cập nhật thông tin database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=LaravelPanel
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Chạy migrations và seeders

```bash
# Tạo database
php artisan migrate

# Tạo dữ liệu mẫu
php artisan db:seed
```

### 6. Cài đặt các thư viện NPM

```bash
# Cài đặt các thư viện frontend như Tailwind CSS, Font Awesome
npm install

# Biên dịch các file CSS và JavaScript
npm run dev
```

### 7. Cấu hình storage

```bash
# Tạo symbolic link cho storage
php artisan storage:link

# Cấp quyền cho storage
chmod -R 775 storage
```

### 8. Khởi động server

```bash
# Chạy server Laravel
php artisan serve

# Chạy npm dev trong terminal khác để biên dịch và theo dõi thay đổi frontend
npm run dev
```

### 9. Truy cập ứng dụng

Mở trình duyệt và truy cập: `http://localhost:8000`

## Thông tin đăng nhập mặc định

-   Email: admin@example.com
-   Mật khẩu: password

## Lưu ý quan trọng

1. Đảm bảo đã cài đặt đầy đủ các yêu cầu hệ thống
2. Database phải được tạo trước khi chạy migrations
3. Cấp đủ quyền cho thư mục storage
4. Nếu gặp lỗi, kiểm tra file `.env` và các cấu hình
5. Đảm bảo các port 8000 và 3000 không bị chiếm dụng

## Hướng dẫn sử dụng

### Đăng nhập Admin

-   Thông tin đăng nhập mặc định:
    -   Email: admin@example.com
    -   Mật khẩu: password

### Quản lý người dùng

#### Xem danh sách người dùng

-   Chọn "User Management" trong menu bên trái
-   Xem danh sách tất cả người dùng
-   Có thể tìm kiếm theo tên, email
-   Lọc theo vai trò và trạng thái

#### Thêm người dùng mới

1. Nhấn nút "Add New User"
2. Điền thông tin cần thiết:
    - Tên
    - Email
    - Mật khẩu
    - Vai trò (Admin/User)
    - Trạng thái (Active/Inactive)
3. Nhấn "Create User"

#### Sửa thông tin người dùng

1. Tìm người dùng trong danh sách
2. Nhấn nút "Edit"
3. Sửa các thông tin cần thiết
4. Nhấn "Update User"

#### Xóa người dùng

1. Tìm người dùng trong danh sách
2. Nhấn nút "Delete"
3. Xác nhận xóa

-   Lưu ý: Người dùng sẽ được chuyển vào thùng rác và có thể khôi phục lại

### Quản lý sản phẩm

#### Xem danh sách sản phẩm

-   Chọn "Product Management" trong menu bên trái
-   Xem danh sách tất cả sản phẩm
-   Có thể tìm kiếm theo tên
-   Lọc theo danh mục và trạng thái

#### Thêm sản phẩm mới

1. Nhấn nút "Add New Product"
2. Điền thông tin cần thiết:
    - Tên sản phẩm
    - Mô tả
    - Giá
    - Số lượng
    - Hình ảnh
    - Danh mục
    - Trạng thái (Active/Inactive)
3. Nhấn "Create Product"

#### Sửa thông tin sản phẩm

1. Tìm sản phẩm trong danh sách
2. Nhấn nút "Edit"
3. Sửa các thông tin cần thiết
4. Nhấn "Update Product"

#### Xóa sản phẩm

1. Tìm sản phẩm trong danh sách
2. Nhấn nút "Delete"
3. Xác nhận xóa

-   Lưu ý: Sản phẩm sẽ được chuyển vào thùng rác và có thể khôi phục lại

### Quản lý danh mục

#### Xem danh sách danh mục

-   Chọn "Category Management" trong menu bên trái
-   Xem danh sách tất cả danh mục
-   Có thể tìm kiếm theo tên
-   Lọc theo trạng thái

#### Thêm danh mục mới

1. Nhấn nút "Add New Category"
2. Điền thông tin cần thiết:
    - Tên danh mục
    - Mô tả
    - Trạng thái (Active/Inactive)
3. Nhấn "Create Category"

#### Sửa thông tin danh mục

1. Tìm danh mục trong danh sách
2. Nhấn nút "Edit"
3. Sửa các thông tin cần thiết
4. Nhấn "Update Category"

#### Xóa danh mục

1. Tìm danh mục trong danh sách
2. Nhấn nút "Delete"
3. Xác nhận xóa

-   Lưu ý: Danh mục sẽ được chuyển vào thùng rác và có thể khôi phục lại

### Thùng rác

-   Truy cập thùng rác từ menu hoặc nút "Trash" trên mỗi trang quản lý
-   Xem danh sách các bản ghi đã xóa
-   Có thể khôi phục hoặc xóa vĩnh viễn các bản ghi
-   Tìm kiếm và lọc trong thùng rác

## Đóng góp

Mọi đóng góp đều được hoan nghênh! Vui lòng tạo issue hoặc pull request để đóng góp cho dự án.

## Giấy phép

Dự án này được cấp phép theo giấy phép MIT - xem file [LICENSE](LICENSE) để biết thêm chi tiết.

## Hỗ trợ

Để được hỗ trợ, vui lòng gửi email đến ancqph51578@gmail.com hoặc tạo issue trong repository.

## Giải thích chi tiết

### Về Docker

-   Docker giúp đóng gói ứng dụng và các phụ thuộc vào container
-   Không cần cài đặt PHP, MySQL, Nginx trực tiếp
-   Môi trường phát triển nhất quán trên mọi máy
-   Dễ dàng triển khai và mở rộng

### Về NPM

-   NPM (Node Package Manager) quản lý các thư viện frontend
-   `npm install` cài đặt các thư viện được khai báo trong `package.json`
-   `npm run dev` biên dịch và theo dõi thay đổi các file CSS/JS
-   Cần chạy cả Laravel server và npm dev để ứng dụng hoạt động đầy đủ

### Về Key Generation

-   Key được tạo bởi `php artisan key:generate` là một chuỗi ngẫu nhiên
-   Được sử dụng để:
    -   Mã hóa session và cookies
    -   Tạo token bảo mật
    -   Bảo vệ dữ liệu nhạy cảm
-   Lưu trong file `.env` với biến `APP_KEY`
-   Mỗi môi trường cần có key riêng
