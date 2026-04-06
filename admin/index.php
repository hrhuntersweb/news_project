<?php
include('layout/header.php');
?>

<div class="content">

  <!-- Stats -->
  <div class="stats-grid">
    <div class="stat-card">
      <div class="stat-label">Total News</div>
      <div class="stat-value">48</div>
    </div>
    <div class="stat-card green">
      <div class="stat-label">Published</div>
      <div class="stat-value">35</div>
    </div>
    <div class="stat-card orange">
      <div class="stat-label">Categories</div>
      <div class="stat-value">7</div>
    </div>
    <div class="stat-card red">
      <div class="stat-label">Drafts</div>
      <div class="stat-value">13</div>
    </div>
  </div>

  <!-- Recent News Table -->
  <div class="card">
    <div class="card-header">
      <h2>Recent News</h2>
      <div class="card-header-actions">
        <a href="news.html" class="btn btn-light btn-sm">View all</a>
        <a href="news.html" class="btn btn-primary btn-sm">+ Add News</a>
      </div>
    </div>
    <div class="table-wrap">
      <table>
        <thead>
          <tr>
            <th>#</th>
            <th>Title</th>
            <th>Category</th>
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
            <td><span class="badge badge-success">Published</span></td>
            <td>2026-04-05</td>
            <td>
              <a href="news.html" class="btn btn-warning btn-sm">Edit</a>
              <button class="btn btn-danger btn-sm">Delete</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Local Football Team Wins Championship</td>
            <td>Sports</td>
            <td><span class="badge badge-success">Published</span></td>
            <td>2026-04-04</td>
            <td>
              <a href="news.html" class="btn btn-warning btn-sm">Edit</a>
              <button class="btn btn-danger btn-sm">Delete</button>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>Tech Giant Announces New Product Line</td>
            <td>Technology</td>
            <td><span class="badge badge-warning">Draft</span></td>
            <td>2026-04-03</td>
            <td>
              <a href="news.html" class="btn btn-warning btn-sm">Edit</a>
              <button class="btn btn-danger btn-sm">Delete</button>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td>City Council Approves New Budget Plan</td>
            <td>Politics</td>
            <td><span class="badge badge-success">Published</span></td>
            <td>2026-04-02</td>
            <td>
              <a href="news.html" class="btn btn-warning btn-sm">Edit</a>
              <button class="btn btn-danger btn-sm">Delete</button>
            </td>
          </tr>
          <tr>
            <td>5</td>
            <td>New Art Exhibition Opens Downtown</td>
            <td>Culture</td>
            <td><span class="badge badge-warning">Draft</span></td>
            <td>2026-04-01</td>
            <td>
              <a href="news.html" class="btn btn-warning btn-sm">Edit</a>
              <button class="btn btn-danger btn-sm">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</div>

<?php
include('layout/footer.php');
?>