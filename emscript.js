function validateForm() {
  let username = document.forms['RegForm']['name'].value;
  let email = document.forms['RegForm']['email'].value;
  let jobtitle = document.forms['RegForm']['job_title'].value;
  let phonenum = document.forms['RegForm']['telephone'].value;

  if (username == '') {
    alert('Name must be filled out');
    return false;
  }
  if (email == '') {
    alert('Email must be filled out');
    return false;
  }
  if (email.value.indexOf('@', 0) < 0) {
    alert('Please enter a valid e-mail address.');
    email.focus();
    return false;
  }
  if (email.value.indexOf('.', 0) < 0) {
    alert('Please enter a valid e-mail address.');
    email.focus();
    return false;
  }
  if (jobtitle == '') {
    alert('Your job title should be filled out');
    return false;
  }
  if (phonenum == '') {
    alert('Please enter your phone number');
    return false;
  }
}

function subfrm() {
  document.getElementById('mysubmit').onclick = function () {
    location.href = 'display.php';
  };
}

