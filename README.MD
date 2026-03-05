# Panduan Mengubah Nama Folder Project Laravel di Docker

Jika di kemudian hari Anda mengganti nama folder project Laravel (sebelumnya `PWL_POS`), Anda perlu memperbarui beberapa konfigurasi di Docker environment agar container bisa membaca kodenya dengan benar.

Berikut adalah 3 file yang perlu disesuaikan setiap kali Anda mengubah nama folder project:

## 1. File `docker-compose.yml`

Buka file `docker-compose.yml`, cari bagian `services: app:`, dan ubah parameter `working_dir` menggunakan nama folder project Anda yang baru (misalnya dari `PWL_POS` diganti menjadi `NAMA_FOLDER_BARU`).

```yaml
services:
  app:
    # ...
    # Ubah path di bawah menjadi folder yang baru
    working_dir: /var/www/NAMA_FOLDER_BARU
```

## 2. File `docker/nginx/default.conf`

Nginx butuh tahu di mana letak root directory (`/public`) dari framework Laravel Anda. Buka file `docker/nginx/default.conf` dan perbarui path `root`:

```nginx
server {
    listen 80;
    # ...
    # Ubah menjadi path folder yang baru + /public
    root /var/www/NAMA_FOLDER_BARU/public;
```

## 3. File `docker/php/Dockerfile`

Beberapa step di Dockerfile (seperti WORKDIR dan pemberian permission) juga bergantung pada letak folder aplikasi. Buka file `docker/php/Dockerfile` dan update baris berikut:

```dockerfile
# ...
# 1. Ubah WORKDIR ke folder baru
WORKDIR /var/www/NAMA_FOLDER_BARU

# ...
# 2. Pastikan chmod -R ditargetkan ke folder yang baru
RUN chown -R $user:www-data /var/www \
    && chmod -R 775 /var/www/NAMA_FOLDER_BARU/storage /var/www/NAMA_FOLDER_BARU/bootstrap/cache || true
```

## 4. Re-build dan Restart Container

Setelah seluruh path diperbarui, Anda tidak cukup jika hanya me-restart container. Anda _wajib_ melakukan re-build agar instruksi di Dockerfile ikut terefresh:

```bash
docker compose down
docker compose up -d --build
```
