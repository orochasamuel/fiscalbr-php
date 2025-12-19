<?php
enum FinalidadeArquivoSped: int
{
    #[DefaultValue(0)]
    case Remessa = 0;
    case Retificacao = 1;
}