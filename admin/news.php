<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel — News</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- Sidebar -->
  <aside class="sidebar">
    <div class="sidebar-logo">Admin<span>Panel</span></div>
    <ul class="sidebar-menu">
      <li><span class="sidebar-section">Main</span></li>
      <li><a href="index.html"><span class="icon">&#9632;</span> Dashboard</a></li>
      <li><span class="sidebar-section">Content</span></li>
      <li><a href="news.html" class="active"><span class="icon">&#128240;</span> News</a></li>
      <li><a href="categories.html"><span class="icon">&#128193;</span> Categories</a></li>
      <li><span class="sidebar-section">System</span></li>
      <li><a href="settings.html"><span class="icon">&#9881;</span> Settings</a></li>
    </ul>
  </aside>

  <!-- Main -->
  <div class="main">
    <header class="topbar">
      <div class="topbar-title">News</div>
      <div class="topbar-user">
        <div class="avatar">A</div>
        Admin
      </div>
    </header>

    <div class="content">
      <div class="card">
        <div class="card-header">
          <h2>All News Articles</h2>
          <div class="card-header-actions">
            <input type="text" class="search-input" placeholder="Search news...">
            <a href="news-add.html" class="btn btn-primary">+ Add News</a>
          </div>
        </div>

        <div class="table-wrap">
          <table>
            <thead>
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Category</th>
                <th>Author</th>
                <th>Status</th>
                <th>Date</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>New Study on Climate Change Released</td>
                <td>Science</td>
                <td>John Doe</td>
                <td><span class="badge badge-success">Published</span></td>
                <td>2026-04-05</td>
                <td>
                  <a href="news-edit.html" class="btn btn-warning btn-sm">Edit</a>
                  <button class="btn btn-danger btn-sm" onclick="openModal('deleteModal')">Delete</button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Local Football Team Wins Championship</td>
                <td>Sports</td>
                <td>Jane Smith</td>
                <td><span class="badge badge-success">Published</span></td>
                <td>2026-04-04</td>
                <td>
                  <a href="news-edit.html" class="btn btn-warning btn-sm">Edit</a>
                  <button class="btn btn-danger btn-sm" onclick="openModal('deleteModal')">Delete</button>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Tech Giant Announces New Product Line</td>
                <td>Technology</td>
                <td>Bob Lee</td>
                <td><span class="badge badge-warning">Draft</span></td>
                <td>2026-04-03</td>
                <td>
                  <a href="news-edit.html" class="btn btn-warning btn-sm">Edit</a>
                  <button class="btn btn-danger btn-sm" onclick="openModal('deleteModal')">Delete</button>
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>City Council Approves New Budget Plan</td>
                <td>Politics</td>
                <td>John Doe</td>
                <td><span class="badge badge-success">Published</span></td>
                <td>2026-04-02</td>
                <td>
                  <a href="news-edit.html" class="btn btn-warning btn-sm">Edit</a>
                  <button class="btn btn-danger btn-sm" onclick="openModal('deleteModal')">Delete</button>
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>New Art Exhibition Opens Downtown</td>
                <td>Culture</td>
                <td>Alice Brown</td>
                <td><span class="badge badge-warning">Draft</span></td>
                <td>2026-04-01</td>
                <td>
                  <a href="news-edit.html" class="btn btn-warning btn-sm">Edit</a>
                  <button class="btn btn-danger btn-sm" onclick="openModal('deleteModal')">Delete</button>
                </td>
              </tr>
              <tr>
                <td>6</td>
                <td>Economic Forum Highlights Global Trends</td>
                <td>Economy</td>
                <td>Jane Smith</td>
                <td><span class="badge badge-success">Published</span></td>
                <td>2026-03-30</td>
                <td>
                  <a href="news-edit.html" class="btn btn-warning btn-sm">Edit</a>
                  <button class="btn btn-danger btn-sm" onclick="openModal('deleteModal')">Delete</button>
                </td>
              </tr>
              <tr>
                <td>7</td>
                <td>Scientists Discover New Deep-Sea Species</td>
                <td>Science</td>
                <td>Bob Lee</td>
                <td><span class="badge badge-danger">Archived</span></td>
                <td>2026-03-28</td>
                <td>
                  <a href="news-edit.html" class="btn btn-warning btn-sm">Edit</a>
                  <button class="btn btn-danger btn-sm" onclick="openModal('deleteModal')">Delete</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="table-footer">
          <span>Showing 1–7 of 48 results</span>
          <div class="pagination">
            <a href="#" class="page-btn active">1</a>
            <a href="#" class="page-btn">2</a>
            <a href="#" class="page-btn">3</a>
            <a href="#" class="page-btn">&#8250;</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete Confirm Modal -->
  <div class="modal-overlay" id="deleteModal">
    <div class="modal">
      <div class="modal-header">
        <h3>Confirm Delete</h3>
        <button class="modal-close" onclick="closeModal('deleteModal')">&times;</button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete <strong>"New Study on Climate Change Released"</strong>? This action cannot be undone.</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-light" onclick="closeModal('deleteModal')">Cancel</button>
        <button class="btn btn-danger">Delete</button>
      </div>
    </div>
  </div>

  <script>
    function openModal(id) {
      document.getElementById(id).classList.add('open');
    }
    function closeModal(id) {
      document.getElementById(id).classList.remove('open');
    }
    // Close on overlay click
    document.querySelectorAll('.modal-overlay').forEach(function(overlay) {
      overlay.addEventListener('click', function(e) {
        if (e.target === overlay) overlay.classList.remove('open');
      });
    });
  </script>
</body>
</html>
