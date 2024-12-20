# LANGKAH-LANGKAH MENJALANKAN DOCKER DI LINUX

## MEMBUAT FOLDER DOCKER DENGAN MENGGUNAKAN COMMAND WSL
```bash
$ mkdir docker4
```
## PINDAH KE FOLDER docker4 
```bash
$ cd docker4
```
## MEMBUAT FILE DOCKERFILE
```bash
$ touch Dockerfile
```
## MELAKUKAN INPUT KEDALAM FILE DOCKERFILE
```bash
$ nano Dockerfile
```
## MELAKUKAN INOUT PADA FILE Dockerfile
```bash
# Gunakan image PHP resmi
FROM php:8.1-apache

# Install dependencies (misalnya, jika menggunakan ekstensi tertentu)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Salin file PHP Anda ke dalam kontainer
COPY . /var/www/html/

# Expose port 80
EXPOSE 80
```
## MEMBUAT FILE index.php 
```bash
$ touch index.php
```
## MELAKUKAN INPUT PADA FILE index.php
```bash
$ nano index.php
```
## MENGEDIT ISI FILE INDEX YANG ADA DI DIDALAM FOLDER HTML:
```bash
$ nano html/index.html
```

## ISI FILE index.html:
```bash
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Nginx</title>
</head>
<body>
    <h1>Hello, Docker dan Nginx!</h1>
    <p>Ini adalah halaman HTML sederhana yang dilayani oleh Nginx di dalam Docker container.</p>
</body>
</html>
```

#  BANGUN Docker Image:
```bash
$ docker build -t os-app .
```

## MENJALANKAN KONTAINER:
```bash
$ docker run -d -p 8080:80 os-app
```

## AKSES APLIKASI DI BROWSER
http://localhost:8080

## MENAMPILKAN CARA RUNNING CONTAINER, STATUS DOCKER TELAH BERJALAN, DAN STOP CONT
![gambardocker](https://drive.google.com/uc?id=1vbabcrSyPvQW466Syh6eB7VMdATivKiA)

## MENAMPILKAN BUKTI DOCKER BERJALAN
![gambardocker](https://drive.google.com/uc?id=1S5MrX86l2euIf7Cs77enylsV2X1nWZSB)


## MENGHENTIKAN KONTAINER YANG BERJALAN
```bash
$ docker stop 6938e7e61034bd80069b71464194739e5300c22ba19af2576d923bedd5cb2aa5
```
<<<<<<< HEAD
## MELAKUKAN PEMBATASAN MEMORI
```bash
$ docker run -d -p 8080:80--memory=512m --memory-swap=1g id-image
```
## BUKTI STATUS PEMBATASAN MEMORI
![gambar](https://drive.google.com/uc?id=1AeQKG7MURywxa3tqjuNLRjQWqRtbFaBQ)

## MELAKUKAN FASE BEDAH CONTAINER
## 1. Command ps aux
Menampilkan semua proses yang sedang berjalan di dalam container. Ini berguna untuk menganalisis aplikasi atau proses yang sedang dijalankan dalam container.
```bash
$ docker exec -it <container_id> ps aux
```
### Bukti Percobaan ps aux
![gambar](https://drive.google.com/uc?id=19aTENEJrl2pAvbCH9pQydn91dzBdtkZ3)

## 2. Command history
Command ini memberikan informasi rinci tentang container, termasuk konfigurasi jaringan, mounts, environment variables, dan lainnya.
```bash
$ docker history <image_id>
```
## Bukti percobaan history
![gambar](https://drive.google.com/uc?id=1oiex2r-9IqrXLkgja8SDcO5UGnSzLXm6)

## 3. Command logs
Untuk melihat log yang dihasilkan oleh container. Ini berguna untuk debugging atau melihat output aplikasi yang berjalan di dalam container.
```bash
$ docker logs <container_id>
```
## Bukti percobaan logs
![gambar](https://drive.google.com/uc?id=1nj9sz-coF_N7rZnyyFf3CE_QpskvoRdP)

## 4.Command masuk ke container
Untuk masuk dan melakukan modifikasi file didalam container
```bash
$ docker exec -it <container_id> /bin/bash
```
## Bukti percobaan masuk ke container
![gambar](https://drive.google.com/uc?id=1BHZ18OWwuP6uL_CcbM6uwSJtHaHL_TbB)
=======

# MENGHENTIKAN DOCKER
>>>>>>> b04e465a91fb55d45cb317e436e54f4ff26e2080
