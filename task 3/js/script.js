"use strict";

window.addEventListener('DOMContentLoaded', () => {
    const addPostBtn = document.querySelector('.add-post-btn'),
          addPostForm = document.querySelector('.post-form-style'),
          addCommentForm = document.querySelector('.post-form-style-comment'),
          addCommentBtn = document.querySelector('.btn-add-comment'),
          addPostConfBtn = document.querySelector('.btn-add-new-post'),
          addCommentConfBtn = document.querySelector('.btn-add-new-comment');




    addPostBtn.addEventListener('click', () => {
        addPostForm.classList.toggle('show');
    });

    addCommentBtn.addEventListener('click', () => {
        addCommentForm.classList.toggle('show');
    });

    addPostConfBtn.addEventListener('click', (e) => {
        e.defaultPrevented();
        
    });

    addCommentConfBtn.addEventListener('click', (e) => {
        e.defaultPrevented();
        //...
    });


});