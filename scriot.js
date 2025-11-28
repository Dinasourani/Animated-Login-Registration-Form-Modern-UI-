const wrapper=document.querySelector('.wrapper');
const registerlink=document.querySelector('.register-link');
const loginlink=document.querySelector('.login_link');

registerlink.onclick = () =>{
	wrapper.classList.add('active');
}
loginlink.onclick = () =>{
	wrapper.classList.remove('active');
}