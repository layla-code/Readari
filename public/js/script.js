document.addEventListener('DOMContentLoaded', () => {
  const csrfToken = document.head
    .querySelector('meta[name="csrf-token"]')
    .getAttribute('content');

  // add to fav
  document.querySelectorAll('.add-favorite-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      fetch(`/account/favorites/${btn.dataset.id}`, {
        method: 'POST',
        credentials: 'same-origin',     
        headers: {
          'X-CSRF-TOKEN': csrfToken,
          'Accept': 'application/json'
        }
      })
      .then(res => {
        if (res.ok) {
          btn.textContent = '❤️ Favorited';
          btn.disabled = true;
        } else {
          console.error('Request failed with status', res.status);
        }
      })
      .catch(err => console.error('Fetch error:', err));
    });
  });

  // delete from fav
  document.querySelectorAll('.remove-favorite-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      // جلب الاي دي من الزر نفسه أو من العنصر الأب
      const articleId = btn.dataset.id
        || btn.closest('.favorite-item').dataset.id;

      console.log('Removing favorite id =', articleId); // للتأكيد

      fetch(`/account/favorites/${articleId}`, {
        method: 'DELETE',
        credentials: 'same-origin',
        headers: {
          'X-CSRF-TOKEN': csrfToken,
          'Accept': 'application/json'
        }
      })
      .then(res => {
        if (res.ok) {
          btn.closest('.favorite-item').remove();
        } else {
          console.error('Delete request failed:', res.status);
        }
      })
      .catch(err => console.error('Fetch error:', err));
    });
  });
});
