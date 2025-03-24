<?php
// File để lưu dữ liệu
$file = 'questions.json';

// Nhận dữ liệu từ form
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$question = $_POST['question'];

// Tạo một mảng chứa thông tin câu hỏi mới
$new_question = array(
    "name" => $name,
    "email" => $email,
    "phone" => $phone,
    "subject" => $subject,
    "question" => $question,
    "date" => date("Y-m-d H:i:s")
);

// Đọc dữ liệu cũ từ file (nếu có)
if (file_exists($file)) {
    $data = json_decode(file_get_contents($file), true);
} else {
    $data = [];
}

// Thêm câu hỏi mới vào danh sách
$data[] = $new_question;

// Ghi dữ liệu vào file JSON
file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));

echo "Question submitted successfully!";
?>
