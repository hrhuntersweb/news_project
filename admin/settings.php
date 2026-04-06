<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel — Settings</title>
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
      <li><a href="news.html"><span class="icon">&#128240;</span> News</a></li>
      <li><a href="categories.html"><span class="icon">&#128193;</span> Categories</a></li>
      <li><span class="sidebar-section">System</span></li>
      <li><a href="settings.html" class="active"><span class="icon">&#9881;</span> Settings</a></li>
    </ul>
  </aside>

  <!-- Main -->
  <div class="main">
    <header class="topbar">
      <div class="topbar-title">Settings</div>
      <div class="topbar-user">
        <div class="avatar">A</div>
        Admin
      </div>
    </header>

    <div class="content">
      <div class="card">

        <!-- General -->
        <div class="settings-section">
          <h3>General</h3>

          <div class="settings-row">
            <div class="settings-label">
              <strong>Site Name</strong>
              <small>Displayed in the browser tab and header</small>
            </div>
            <div class="settings-field">
              <input type="text" class="form-control" value="My News Portal">
            </div>
          </div>

          <div class="settings-row">
            <div class="settings-label">
              <strong>Site Description</strong>
              <small>Used for SEO meta description</small>
            </div>
            <div class="settings-field">
              <textarea class="form-control">A portal for the latest news and updates.</textarea>
            </div>
          </div>

          <div class="settings-row">
            <div class="settings-label">
              <strong>Admin Email</strong>
              <small>Receives system notifications</small>
            </div>
            <div class="settings-field">
              <input type="email" class="form-control" value="admin@example.com">
            </div>
          </div>

          <div class="settings-row">
            <div class="settings-label">
              <strong>Timezone</strong>
              <small>Used for date/time display</small>
            </div>
            <div class="settings-field">
              <select class="form-control">
                <option>UTC</option>
                <option selected>UTC+5 (Tashkent)</option>
                <option>UTC+3 (Moscow)</option>
                <option>UTC+1 (Berlin)</option>
                <option>UTC-5 (New York)</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Content -->
        <div class="settings-section">
          <h3>Content</h3>

          <div class="settings-row">
            <div class="settings-label">
              <strong>Articles per page</strong>
              <small>Number of news items shown per page</small>
            </div>
            <div class="settings-field">
              <input type="number" class="form-control" value="10" style="max-width:120px">
            </div>
          </div>

          <div class="settings-row">
            <div class="settings-label">
              <strong>Default status</strong>
              <small>Default status for new articles</small>
            </div>
            <div class="settings-field">
              <select class="form-control" style="max-width:200px">
                <option selected>Draft</option>
                <option>Published</option>
              </select>
            </div>
          </div>

          <div class="settings-row">
            <div class="settings-label">
              <strong>Allow comments</strong>
              <small>Enable comments on articles</small>
            </div>
            <div class="settings-field">
              <label class="toggle">
                <input type="checkbox" checked>
                <span class="toggle-slider"></span>
              </label>
            </div>
          </div>

          <div class="settings-row">
            <div class="settings-label">
              <strong>Moderate comments</strong>
              <small>Require approval before comments appear</small>
            </div>
            <div class="settings-field">
              <label class="toggle">
                <input type="checkbox">
                <span class="toggle-slider"></span>
              </label>
            </div>
          </div>
        </div>

        <!-- SEO -->
        <div class="settings-section">
          <h3>SEO</h3>

          <div class="settings-row">
            <div class="settings-label">
              <strong>Meta keywords</strong>
              <small>Comma-separated keywords</small>
            </div>
            <div class="settings-field">
              <input type="text" class="form-control" value="news, latest, world, technology">
            </div>
          </div>

          <div class="settings-row">
            <div class="settings-label">
              <strong>Google Analytics ID</strong>
              <small>Leave blank to disable tracking</small>
            </div>
            <div class="settings-field">
              <input type="text" class="form-control" placeholder="G-XXXXXXXXXX">
            </div>
          </div>

          <div class="settings-row">
            <div class="settings-label">
              <strong>Enable sitemap</strong>
              <small>Auto-generate XML sitemap</small>
            </div>
            <div class="settings-field">
              <label class="toggle">
                <input type="checkbox" checked>
                <span class="toggle-slider"></span>
              </label>
            </div>
          </div>
        </div>

        <!-- Save button -->
        <div class="settings-section" style="border-bottom:none">
          <button class="btn btn-primary">Save Settings</button>
          <button class="btn btn-light" style="margin-left:10px">Reset to Defaults</button>
        </div>

      </div>
    </div>
  </div>

</body>
</html>
