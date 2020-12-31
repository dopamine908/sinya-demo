# 欣亞線上題 Demo 網站

---
環境所需版本

- php : 7.3 以上
---

下載完專案之後在專案根目錄依照下列的指令執行

- 安裝相依套件
```
composer install
```

- 初始化要 demo 的資料庫、資料
```
php artisan demo:init
```

- 在 local 端將 demo 的網頁 run 起來
```
php artisan serve
```

- 瀏覽網頁，網址： [127.0.0.1:8000](http://127.0.0.1:8000)
