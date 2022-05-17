<div class="uk-margin-top">
    @if ($paginator->hasPages())
        <nav role="navigation"
             aria-label="Pagination Navigation">
            <ul class="uk-pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="uk-disabled">
                        <span>
                           <span class="uk-margin-small-right"
                                      uk-pagination-previous></span>
                            Previous
                        </span>
                    </li>
                @else
                    @if (method_exists($paginator, 'getCursorName'))
                        <li>
                            <a href="#"
                               dusk="previousPage"
                               wire:click="setPage('{{ $paginator->previousCursor()->encode() }}','{{ $paginator->getCursorName() }}')"
                               wire:loading.attr="disabled">
                                <span class="uk-margin-small-right"
                                      uk-pagination-previous></span>
                                Previous
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="#"
                               wire:click="previousPage('{{ $paginator->getPageName() }}')"
                               wire:loading.attr="disabled"
                               dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}">
                                <span class="uk-margin-small-right"
                                      uk-pagination-previous></span>
                                Previous
                            </a>
                        </li>
                    @endif
                @endif


                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    @if (method_exists($paginator, 'getCursorName'))
                        <li class="uk-margin-auto-left">
                            <a href="#"
                               dusk="nextPage"
                               wire:click="setPage('{{ $paginator->nextCursor()->encode() }}','{{ $paginator->getCursorName() }}')"
                               wire:loading.attr="disabled">
                                Next <span class="uk-margin-small-left"
                                      uk-pagination-next></span>
                            </a>
                        </li>
                    @else
                        <li class="uk-margin-auto-left">
                            <a href="#"
                               wire:click="nextPage('{{ $paginator->getPageName() }}')"
                               wire:loading.attr="disabled"
                               dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}">
                                Next <span class="uk-margin-small-left"
                                      uk-pagination-next></span>
                            </a>
                        </li>
                    @endif
                @else
                    <li class="uk-margin-auto-left uk-disabled">
                      <span>
                          Next
                          <span class="uk-margin-small-left"
                              uk-pagination-next></span>
                      </span>
                    </li>

                @endif

            </ul>
        </nav>
    @endif
</div>
