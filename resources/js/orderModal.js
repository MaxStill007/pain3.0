const orderModal = document.getElementById('orderModal');
    orderModal.addEventListener('show.bs.modal', event => {
        const button = event.relatedTarget;
        const orderTitle = button.getAttribute('data-order-title');
        const orderStatus = button.getAttribute('data-order-status');
        const orderDescription = button.getAttribute('data-order-description');
        const orderAmount = button.getAttribute('data-order-amount');
        const orderDate = button.getAttribute('data-order-date');

        // Заполняем модальное окно данными
        document.getElementById('modalOrderTitle').textContent = orderTitle;
        document.getElementById('modalOrderDescription').textContent = orderDescription;
        document.getElementById('modalOrderAmount').textContent = orderAmount;
        document.getElementById('modalOrderDate').textContent = orderDate;

        // Обрабатываем статус
        const statusBadge = document.getElementById('modalOrderStatus');
        let statusText = '';
        let statusClass = '';

        switch (orderStatus) {
            case 'pending':
                statusText = 'В обработке';
                statusClass = 'bg-dark';
                break;
            case 'accepted':
                statusText = 'Принят';
                statusClass = 'bg-CustomPrimary';
                break;
            case 'completed':
                statusText = 'Завершен';
                statusClass = 'bg-success';
                break;
            default:
                statusText = orderStatus;
                statusClass = 'bg-secondary';
        }

        statusBadge.textContent = statusText;
        statusBadge.className = 'badge ' + statusClass;
    });