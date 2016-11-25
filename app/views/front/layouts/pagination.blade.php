@if ($paginator->getLastPage() > 1)
  <?php $previousPage = ($paginator->getCurrentPage() > 1) ? $paginator->getCurrentPage() - 1 : 1; ?>
  <ul class="uk-pagination">
    
    <li class="{{ ($paginator->getCurrentPage() == 1) ? 'uk-active' : '' }}">
      <a href="{{ $paginator->getUrl($previousPage) }}">
        <i class="uk-icon-angle-double-left"></i>
      </a>
    </li>

    @for ($i = 1; $i <= $paginator->getLastPage(); $i++)

      <li class="{{ ($paginator->getCurrentPage() == $i) ? 'uk-active' : '' }}">
         <a href="{{ $paginator->getUrl($i) }}">
           <span>{{ $i }}</span>
         </a> 
      </li>

    @endfor
      
      <li class="item{{ ($paginator->getCurrentPage() == $paginator->getLastPage()) ? ' disabled' : '' }}">
        <a href="{{ $paginator->getUrl($paginator->getCurrentPage()+1) }}">
          <i class="uk-icon-angle-double-right"></i>
        </a>
      </li>
      
</ul>
@endif