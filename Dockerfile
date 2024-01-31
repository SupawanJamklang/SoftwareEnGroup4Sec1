# ใช้ image ฐานที่ต้องการ
FROM <base_image>

# กำหนดพื้นที่ที่จะเก็บโปรเจ็กต์ใน image
WORKDIR /app

# คัดลอกไฟล์และโฟลเดอร์จากโปรเจ็กต์ของคุณเข้าไปใน image
COPY . .

# ตั้งค่าหรือการติดตั้ง dependencies ต่าง ๆ ที่จำเป็น
RUN <commands_to_install_dependencies>

# ส่งคำสั่งเมื่อเปิด container ให้ทำอะไร (เช่น เริ่มบริการ)
CMD [ "command_to_start_application" ]
