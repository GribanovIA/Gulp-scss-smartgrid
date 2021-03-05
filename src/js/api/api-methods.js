import Axios from 'axios';

const BASEURL = 'http://dev.my-blog.space/' //Адрес хостинга

const instance = Axios.create({
  baseURL: process.env.NODE_ENV === "production" ? BASEURL : ''
});

export const sendFormData = (formData)=>{
  return instance.post('/server/mail.php',{
    name: formData.name,
    email: formData.email,
    phone: formData.phone,
    formName: formData.formName,
    submit: true
  });
}