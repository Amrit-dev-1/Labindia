document.addEventListener('DOMContentLoaded', function() {
    const knowMoreButtons = document.querySelectorAll('.know-more-btn');
  
    knowMoreButtons.forEach(button => {
        button.addEventListener('click', function() {
            const target = this.getAttribute('data-target');
            const productDetail = document.querySelector(`#${target}`);
  
            if (productDetail) {
                const sidebarContent = document.getElementById('sidebar-content');
                sidebarContent.innerHTML = productDetail.innerHTML;
                const sidebar = document.getElementById('sidebar');
                if (sidebar) {
                    sidebar.classList.add('open');
                }
            }
        });
    });
  
    // Close sidebar
    const closeBtn = document.getElementById('close-btn');
    if (closeBtn) {
        closeBtn.addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            if (sidebar) {
                sidebar.classList.remove('open');
            }
        });
    }
  });


  