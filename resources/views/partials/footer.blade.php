</div></div>

<div id="footer">
    <div class="container hidden-xs">
        <div class="row">
            <div class="col-xs-8">
                <p class="text-muted credit">Desenvolvido por
                    &copy; <a href="http://www.jrdesenvolvimento.com.br">JAIR J&Uacute;NIOR{{ Config::get('cms.author') }}</a> 2015. Todos os direitos reservados.
                </p>
            </div>
            <div class="col-xs-4">
                <p class="text-muted credit pull-right">
                    Carregado em {{ round((microtime(1) - LARAVEL_START), 4) }} sec.
                </p>
            </div>
        </div>
    </div>
    <div class="container visible-xs">
        <p class="text-muted credit">Desenvolvido por
            &copy; <a href="http://www.jrdesenvolvimento.com.br">JAIR J&Uacute;NIOR{{ Config::get('cms.author') }}</a> {{ date('Y') }}. Fone: (62)9116-8220 Todos os direitos reservados.
        </p>
    </div>
</div>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.4.1/jquery.timeago.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/scripts/cms-main.js') }}"></script>
@section('js')
@show
@if (Config::get('analytics.google'))
    @include('partials.analytics')
@endif
