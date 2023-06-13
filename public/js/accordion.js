const collapse = document.querySelectorAll('.collapse_btn');
const content = document.querySelectorAll('.content');
const icon = document.querySelectorAll('.arrow');

collapse.forEach((col, index) => {
  col.addEventListener('click', () => {
    const selectedContent = content[index];
    const selectedIcon = icon[index];
    const isExpanded = selectedContent.classList.contains('h-20');

    // Collapse all content sections
    content.forEach(contentItem => {
      contentItem.classList.remove('h-20');
      contentItem.classList.add('h-0');
    });

    // Reset all button and icon styles
    collapse.forEach(colItem => colItem.classList.remove('bg-gray-200'));
    icon.forEach(iconItem => iconItem.classList.remove('rotate-180'));

    if (!isExpanded) {
      // Expand the clicked content section
      selectedContent.classList.remove('h-0');
      selectedContent.classList.add('h-20');
      col.classList.add('bg-gray-200');
      selectedIcon.classList.add('rotate-180');
    }
  });
});
