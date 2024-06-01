import axios from 'axios';

const url = import.meta.env.VITE_BACKEND_URL;

export function handleLike(btn) {
  console.log('like');
  btn.classList.remove('btn-like');
  btn.classList.add('btn-dislike');
  btn.setAttribute('src', `${url}/img/heart-red.png`);

  axios.get(`${url}/like/${btn.dataset.id}`)
    .then((response) => {
      if (response.data.like) {
        console.log('You liked the post');
      } else {
        console.log('Error liking the post');
      }
    })
    .catch((error) => {
      console.error('Error making the request', error);
    });
}

export function handleDislike(btn) {
  console.log('dislike');
  btn.classList.remove('btn-dislike');
  btn.classList.add('btn-like');
  btn.setAttribute('src', `${url}/img/heart-black.png`);

  axios.get(`${url}/dislike/${btn.dataset.id}`)
    .then((response) => {
      if (response.data.like) {
        console.log('You disliked the post');
      } else {
        console.log('Error disliking the post');
      }
    })
    .catch((error) => {
      console.error('Error making the request', error);
    });
}