<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel — Edit News</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

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

  <div class="main">
    <header class="topbar">
      <div class="topbar-title">
        <a href="news.html" class="back-link">&#8592; News</a> / Edit Article
      </div>
      <div class="topbar-user">
        <div class="avatar">A</div>
        Admin
      </div>
    </header>

    <div class="content">
      <form action="#" method="post">
        <div class="form-layout">

          <!-- Left column -->
          <div class="form-main">
            <div class="card">
              <div class="card-header"><h2>Article Content</h2></div>
              <div class="card-body">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" id="title" name="title" class="form-control" value="New Study on Climate Change Released">
                </div>
                <div class="form-group">
                  <label for="content">Content</label>
                  <textarea id="content" name="content" class="form-control form-textarea">Researchers have published a comprehensive new study on the effects of climate change on global weather patterns. The study, conducted over five years, shows significant shifts in precipitation and temperature across multiple continents...</textarea>
                </div>
              </div>
            </div>
          </div>

          <!-- Right column -->
          <div class="form-sidebar">
            <div class="card">
              <div class="card-header"><h2>Publish</h2></div>
              <div class="card-body">
                <div class="form-group">
                  <label for="status">Status</label>
                  <select id="status" name="status" class="form-control">
                    <option value="draft">Draft</option>
                    <option value="published" selected>Published</option>
                    <option value="archived">Archived</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="date">Publish Date</label>
                  <input type="date" id="date" name="date" class="form-control" value="2026-04-05">
                </div>
                <div class="form-actions">
                  <button type="submit" class="btn btn-primary" style="width:100%">Update Article</button>
                  <a href="news.html" class="btn btn-light" style="width:100%;margin-top:8px;justify-content:center">Cancel</a>
                </div>
              </div>
            </div>

            <div class="card" style="margin-top:20px">
              <div class="card-header"><h2>Details</h2></div>
              <div class="card-body">
                <div class="form-group">
                  <label for="category">Category</label>
                  <select id="category" name="category" class="form-control">
                    <option value="">— Select category —</option>
                    <option value="science" selected>Science</option>
                    <option value="sports">Sports</option>
                    <option value="technology">Technology</option>
                    <option value="politics">Politics</option>
                    <option value="culture">Culture</option>
                    <option value="economy">Economy</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="author">Author</label>
                  <input type="text" id="author" name="author" class="form-control" value="John Doe">
                </div>
                <div class="form-group">
                  <label for="tags">Tags</label>
                  <input type="text" id="tags" name="tags" class="form-control" value="climate, science, environment">
                </div>
              </div>
            </div>

            <div class="card" style="margin-top:20px">
              <div class="card-header"><h2>Danger Zone</h2></div>
              <div class="card-body">
                <p style="font-size:0.82rem;color:#888;margin-bottom:12px">Permanently delete this article. This cannot be undone.</p>
                <button type="button" class="btn btn-danger" style="width:100%" onclick="openModal('deleteModal')">Delete Article</button>
              </div>
            </div>
          </div>

        </div>
      </form>
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
        <a href="news.html" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>

  <script>
    function openModal(id) { document.getElementById(id).classList.add('open'); }
    function closeModal(id) { document.getElementById(id).classList.remove('open'); }
    document.querySelectorAll('.modal-overlay').forEach(function(o) {
      o.addEventListener('click', function(e) { if (e.target === o) o.classList.remove('open'); });
    });
  </script>
</body>
</html>
