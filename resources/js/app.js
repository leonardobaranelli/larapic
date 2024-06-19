/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

import './bootstrap';

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import { handleLike, handleDislike, handleSearch } from './main.js';

document.addEventListener("DOMContentLoaded", function() {
  document.querySelectorAll('.btn-like').forEach((btn) => {
    btn.style.cursor = 'pointer';
    btn.addEventListener('click', () => {
      handleLike(btn);
    });
  });

  document.querySelectorAll('.btn-dislike').forEach((btn) => {
    btn.style.cursor = 'pointer';
    btn.addEventListener('click', () => {
      handleDislike(btn);
    });
  });

  handleSearch();
  
});
