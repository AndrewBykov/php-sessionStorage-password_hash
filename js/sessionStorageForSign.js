const res = document.querySelector('.error')
document.querySelector('#btn-sign').addEventListener('click', saveInfoUser);

    function saveInfoUser() {
        const login = document.querySelector('#login').value;
        const password = document.querySelector('#password').value;
    
        sessionStorage.setItem('login', login);
        sessionStorage.setItem('pass', password);
    
        
    }

    function seeInfoUser() {
        const login = document.querySelector('#login').value;
        const password = document.querySelector('#password').value;
        
        const login1 = sessionStorage.getItem('login', login);
        const password1 = sessionStorage.getItem('pass', password);
    
        document.querySelector('#login').value = login1;
        document.querySelector('#password').value = password1;
    }

    seeInfoUser()

    // if(res.textContent === '') {
    //     sessionStorage.removeItem('login')
    //     sessionStorage.removeItem('pass')
    // }