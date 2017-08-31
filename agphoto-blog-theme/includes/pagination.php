<style>
  .pagination__link {
    font-size: 1rem;
  }
  .pagination__link--older {
    float: right;
  }
</style>
<div class="pagination">
  <div class="pagination__link pagination__link--newer"><?php previous_posts_link( 'Newer posts' ); ?></div>
  <div class="pagination__link pagination__link--older"><?php next_posts_link( 'Older posts' ); ?></div>
</div>