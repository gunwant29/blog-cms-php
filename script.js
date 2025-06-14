
// Confirm deletion dialog
function confirmDelete(id) {
  if (confirm("Delete this post permanently?")) {
    window.location.href = `?action=delete&id=${id}`;
  }
}

// Show live character count
document.addEventListener('DOMContentLoaded', () => {
  const content = document.getElementById('content');
  const count = document.getElementById('char-count');
  if (content && count) {
    content.addEventListener('input', () => {
      count.textContent = `${content.value.length} characters`;
    });
  }
});
