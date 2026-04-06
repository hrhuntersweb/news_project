<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel — Add News</title>
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
        <a href="news.html" class="back-link">&#8592; News</a> / Add Article
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
                  <input type="text" id="title" name="title" class="form-control" placeholder="Enter article title">
                </div>
                <div class="form-group">
                  <label for="content">Content</label>
                  <textarea id="content" name="content" class="form-control form-textarea" placeholder="Write article content here..."></textarea>
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
                    <option value="published">Published</option>
                    <option value="archived">Archived</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="date">Publish Date</label>
                  <input type="date" id="date" name="date" class="form-control" value="2026-04-06">
                </div>
                <div class="form-actions">
                  <button type="submit" class="btn btn-primary" style="width:100%">Save Article</button>
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
                    <option value="science">Science</option>
                    <option value="sports">Sports</option>
                    <option value="technology">Technology</option>
                    <option value="politics">Politics</option>
                    <option value="culture">Culture</option>
                    <option value="economy">Economy</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="author">Author</label>
                  <input type="text" id="author" name="author" class="form-control" placeholder="Author name">
                </div>
                <div class="form-group">
                  <label for="tags">Tags</label>
                  <input type="text" id="tags" name="tags" class="form-control" placeholder="tag1, tag2, tag3">
                </div>
              </div>
            </div>
          </div>

        </div>
      </form>
    </div>
  </div>

</body>
</html>
