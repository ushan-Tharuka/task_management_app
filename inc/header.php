<header class="header">
    <style>
        /* General Header Styling */
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
            background-color: #1d3557; /* Navy Blue */
            color: white;
        }

        .u-name {
            display: flex;
            align-items: center;
            font-size: 24px;
            color: #fff;
        }

        .u-name b {
            color: #007BFF; /* Highlighted text in blue */
        }

        /* Search Bar Styling */
        .search-bar {
            display: flex;
            align-items: center;
            background-color: white;
            border-radius: 8px;
            padding: 5px 10px;
            width: 50%; /* Takes up 50% of the header width */
        }

        .search-bar input {
            flex: 1;
            border: none;
            outline: none;
            padding: 5px;
            font-size: 14px;
        }

        .search-bar button {
            background: none;
            border: none;
            color: #007BFF;
            font-size: 16px;
            cursor: pointer;
        }

        /* Notification Styling */
        .notification {
            position: relative;
            cursor: pointer;
        }

        .notification i {
            font-size: 20px;
            color: white;
        }

        .notification span {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: red;
            color: white;
            border-radius: 50%;
            font-size: 12px;
            padding: 2px 6px;
        }
    </style>

    <h2 class="u-name">
        Task <b>Management</b>
        <label for="checkbox">
            <i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
        </label>
    </h2>

    <!-- Search Bar in the Middle -->
    <div class="search-bar">
        <input type="text" placeholder="Search..." id="searchInput">
        <button id="searchBtn">
            <i class="fa fa-search" aria-hidden="true"></i>
        </button>
    </div>

    <span class="notification" id="notificationBtn">
        <i class="fa fa-bell" aria-hidden="true"></i>
        <span id="notificationNum"></span>
    </span>
</header>

<div class="notification-bar" id="notificationBar">
    <ul id="notifications"></ul>
</div>

<script type="text/javascript">
    var openNotification = false;

    const notification = () => {
        let notificationBar = document.querySelector("#notificationBar");
        if (openNotification) {
            notificationBar.classList.remove('open-notification');
            openNotification = false;
        } else {
            notificationBar.classList.add('open-notification');
            openNotification = true;
        }
    };
    let notificationBtn = document.querySelector("#notificationBtn");
    notificationBtn.addEventListener("click", notification);

    // Placeholder for search functionality
    document.getElementById('searchBtn').addEventListener('click', function () {
        const query = document.getElementById('searchInput').value;
        alert('Searching for: ' + query); // Replace with your search logic
    });
</script>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#notificationNum").load("app/notification-count.php");
        $("#notifications").load("app/notification.php");
    });
</script>
