$(document).ready(function() {
    const loginForm = document.getElementById('auth');
  loginForm.addEventListener('submit', (event) => {

    event.preventDefault();   // Отменяем стандартное поведение отправки формы
    
    const formData = new FormData(loginForm); // Получаем данные формы
    
    // Отправляем AJAX запрос на сервер
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'php/auth.php');
    xhr.onload = function() {
      if (xhr.status === 200) {
        // Обрабатываем ответ сервера
        const response = JSON.parse(xhr.responseText);
        if (response.success) {
          alert('Вход выполнен успешно');
        } else {
          alert('Ошибка авторизации: ' + response.error);
        }
      } else {
        alert('Ошибка соединения с сервером');
      }
    };
    xhr.send(formData);
  });
});

