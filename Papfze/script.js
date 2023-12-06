document.getElementById('form__body').addEventListener('submit', function(event) {
    event.preventDefault();
  
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let message = document.getElementById('message').value;
  
    let xhr = new XMLHttpRequest();
    let url = 'sendmail.php'; // Путь к файлу process_form.php
  
    let params = 'name=' + encodeURIComponent(name) +
                 '&email=' + encodeURIComponent(email) +
                 '&message=' + encodeURIComponent(message);
  
    xhr.open('POST', url, true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        console.log(xhr.responseText); // Выводим ответ сервера в консоль
        alert('Письмо успешно отправлено.');
      } else {
        alert('Ошибка при отправке письма.');
      }
    };
  
    xhr.send(params);
  });