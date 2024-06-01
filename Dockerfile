# FROM node:18
# WORKDIR /app
# COPY package*.json ./
# RUN npm install
# COPY . .
# EXPOSE 4000
# CMD ["npm", "start"]

# Menggunakan node image dari Docker Hub
FROM node:18

# Menetapkan direktori kerja di dalam container
WORKDIR /app

# Menyalin package.json dan package-lock.json (jika ada)
COPY package*.json ./

# Menginstal dependensi npm
RUN npm install

# Menyalin seluruh kode sumber proyek
COPY . .

# Menetapkan port yang akan digunakan oleh aplikasi
EXPOSE 4000

# Perintah untuk menjalankan aplikasi saat container dijalankan
CMD ["npm", "start"]