<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Portal FADERGS</title>
        <link href="estilo.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <?php
        require_once 'menu.php';
        require_once 'menu02.php';
        ?>
        
        <div id="banner"></div>
        <div id="menusec"></div>
        <div id="noticia"></div>
        <div id="noticia2">
            <button>LEIA A NOTÍCIA COMPLETA</button>
        </div>
        <div id="noticia03">
            <button>LEIA A NOTÍCIA COMPLETA</button>
        </div>
        <div id="outras"></div>
        <div id="link01">
            <label>Visita técnica à Aldeia Indígena Guarani Jataity: nova data programada 06/04<br><br>
            FADERGS realiza atendimentos gratuitos para declarações do Imposto de Renda 2019</label>          
        </div>
        <div id="link02">
            <label>Projeto do Imposto de Renda: divulgação do processo de seleção<br><br>
            Resultado FADERGS Mundi: Bolsa Pós-Graduação 2019-1<br><br>
            Escola de Comunicação, Design e Tecnologia da Informação da FADERGS terá Grupo de Pesquisa</label>
        </div>
        <div id="link03">
            <label>FADERGS visita a sede da CWI Software em Porto Alegre<br><br>
            Participe da série de palestrantes do OneCampus® by Laureate</label>
        </div>
        <div id="link04">
            <label>VEJA TODAS AS NOTÍCIAS</label>
        </div>
        <div id="noticia04">
            <button>LEIA A NOTÍCIA COMPLETA</button>
        </div>
        <div id="reigresso"></div>
        <div id="evento">
            <button>VEJA TODOS OS EVENTOS </button>
        </div>
        <div id="redes"></div>
        <div id="rodape">
            <table>
            <tr>
                <td>►Institucional<br><br>
                    Sobre a Fadergs<br><br>
                    Convênioes e Parcerias<br><br>
                    Rede Laureate<br><br>
                    Avaliação Institucional/CPA<br><br>
                    Política de Privacidade<br><br>
                    Idiomas<br><br>
                    International Office<br><br>
                </td>
                <td>►Contato<br><br>
                    Ouvidoria<br><br> 
                    Fale Conosco<br><br> 
                    Nós Ligamos<br><br> 
                    Trabalhe Conosco<br><br> 
                    Seleção de Docentes<br><br> 
                                       <br><br> 
                                       <br><br> 
                </td>
                <td>►ALUNOS<br><br>
                    Bolsas e Financiamentos<br><br>
                    CAE<br><br>
                    DCE<br><br>
                    Negociação de Débitos<br><br>
                    Financeiro<br><br>
                    Formaturas<br><br>
                    Rematrícula<br><br>
                </td>
                <td>►SERVIÇOS<br><br>
                    Empresa Júnior<br><br>
                    NEAD<br><br>
                    NAP<br><br>
                    NAF<br><br>
                    Prova de Proficiência<br><br>
                    NPJ<br><br>
                       <br><br>
                </td>
                <td>►Redes Sociais<br><br>
                    Facebook<br><br>
                    Twitter<br><br>
                    YouTube<br><br>
                    Gplus<br><br>
                       <br><br>
                       <br><br>
                       <br><br>
                </td>            
            </tr>
            </table>
        </div>
        
        
        <style>
            body{
                margin: 0px;
                padding: 0px;
            }
            #banner{ 
                width: 1900px; height: 700px; 
                background-image: url('imagens/banner.png'); 
                /*background-size: 100% 100%;*/  
               /*background-repeat: no-repeat ;*/   
                background-position: right bottom;     
            }
            #menusec{ 
                width: 1900px; height: 132px; 
                background-image: url('imagens/menusec.png'); 
                /*background-size: 100% 100%;*/  
               /*background-repeat: no-repeat ;*/   
                background-position: right bottom;     
            }
            #noticia{
                width: 637px; height: 55px; 
                margin: 15px 0px 0px 390px;
                background-image: url('imagens/noticias.png');
                background-position: right bottom; 
            }
            
            #noticia2{
                width: 637px; height: 440px; 
                margin: 15px 0px 0px 390px;
                background-image: url('imagens/rounds.png');
                background-position: right bottom;
                position: relative;
                float: left;
            }
            #noticia2:hover{
                top:-2px;box-shadow:0 4px 4px #666
            }
            #noticia2 button{
                margin: 397px 0px 0px 441px;
                padding: 12px 0px 2px 16px;
                background-color: #FFA500;
                font-size: 13px;
                font-family: "Calibri";
                border: none;
                width: 175px; height: 32px;
                border-radius: 5px;
                color: white;
               
            }
            #noticia2 button:hover{
                background-color: lightgrey;
                color:white;
            }
            
            #reigresso{
                width: 408px; height: 70px; 
                background-image: url('imagens/reigresso.png');
                background-position: right bottom; 
                margin: 5px 0px 0px 0px;
                margin-left: 1100px;
            }
            #evento{
                width: 408px; height: 600px; 
                background-image: url('imagens/eventos.png');
                background-position: right bottom; 
                margin: 40px 0px 0px 0px;
                margin-left: 1100px;
            }
            #evento button{
                margin: 542px 0px 0px 20px;               
                background-color: #919191;
                font-weight: 700;
                font-size: 17px;
                font-family: "Calibri";
                text-align: center;
                border: none;
                width: 90%; height: 48px;
                border-radius: 5px;
                color: white;
            }
            #evento button:hover{
                background-color: lightgrey;
                color:white;
            }
            #redes{
                width: 408px; height: 60px; 
                background-image: url('imagens/redes.png');
                background-position: right bottom; 
                margin: 40px 0px 0px 0px;
                margin-left: 1100px;
            }
            #noticia03{
                background-image: url('imagens/noticia03.png');
                background-repeat: no-repeat;
                width: 312px; height: 355px;
                background-position: right bottom;
                margin: 470px 0px 0px 385px;
                float: left;
                position: absolute;
            }
            
            #noticia03 button{
                margin: 305px 0px 0px 114px;
                padding: 12px 0px 2px 16px;
                background-color: #FFA500;
                font-size: 13px;
                font-family: "Calibri";
                border: none;
                width: 175px; height: 32px;
                border-radius: 5px;
                color: white;
            }
            #noticia03 button:hover{
                background-color: lightgrey;
                color:white;
            }
            #outras{
                background-image: url('imagens/outras.png');
                background-repeat: no-repeat;
                width: 309px; height: 48px;
                background-position: right bottom;
                margin: 815px 0px 0px 387px;
                float: left;
                position: absolute;
            }
            
            #noticia04{
                background-image: url('imagens/noticia04.png');
                background-repeat: no-repeat;
                width: 309px; height: 335px;
                background-position: right bottom;
                margin: 470px 0px 0px 720px;
                float: left;
                position: absolute;
            }
            #noticia04 button{
                margin: 291px 0px 0px 111px;
                padding: 12px 0px 2px 16px;
                background-color: #FFA500;
                font-size: 13px;
                font-family: "Calibri";
                border: none;
                width: 175px; height: 32px;
                border-radius: 5px;
                color: white;
            }
            #noticia04 button:hover{
                background-color: lightgrey;
                color:white;
            }
            
            #link01{
                background-image: url('imagens/link01.png');
                background-repeat: no-repeat;
                width: 638px; height: 147px;
                background-position: right bottom;
                margin: 862px 0px 0px 385px;
                float: left;
                position: absolute;
            }
            #link01 label{
                margin: 50px 0px 0px 23px;
                font-size: 14px;
                font-family: "Calibri";
                width: 200%; height: 32px;
                color: #D7830A; 
                position: absolute;
            }
            #link01 label:hover{
                text-decoration: underline;
                color: #4F4F4F;
                cursor: pointer;
            }
            #link02{
                background-image: url('imagens/link02.png');
                background-repeat: no-repeat;
                width: 639px; height: 148px;
                background-position: right bottom;
                margin: 1009px 0px 0px 385px;
                float: left;
                position: absolute;
            }
            #link02 label{
                margin: 50px 0px 0px 23px;
                font-size: 14px;
                font-family: "Calibri";
                width: 200%; height: 32px;
                color: #D7830A; 
                position: absolute;
            }
            #link02 label:hover{
                text-decoration: underline;
                color: #4F4F4F;
                cursor: pointer;
            }
            #link03{
                background-image: url('imagens/link03.png');
                background-repeat: no-repeat;
                width: 639px; height: 117px;
                background-position: right bottom;
                margin: 1156px 0px 0px 385px;
                float: left;
                position: absolute;
            }
            #link03 label{
                margin: 50px 0px 0px 23px;
                font-size: 14px;
                font-family: "Calibri";
                width: 200%; height: 32px;
                color: #D7830A; 
                position: absolute;
            }
            #link03 label:hover{
                text-decoration: underline;
                color: #4F4F4F;
                cursor: pointer;
            }
            #link04{
                background-image: url('imagens/link04.png');
                background-repeat: no-repeat;
                width: 639px; height: 51px;
                background-position: right bottom;
                margin: 1272px 0px 0px 385px;
                float: left;
                position: absolute;
            }
            #link04 label{
                margin: 20px 0px 0px 245px;
                font-size: 18px;
                font-family: "Calibri";
                font-weight: bold;
                width: 200%; height: 32px;
                color: #D7830A; 
                position: absolute;
            }
            #link04 label:hover{
                text-decoration: underline;
                cursor: pointer;
            }
            #rodape{
                width: 100%; height: 700px;
                margin: 540px 0px 0px 0px;
                background-image: url('imagens/rodape.png'); 
                background-position: right bottom;
                position: absolute;
                padding-left: 300px;
            }
            #rodape table tr td{
                color: white;
                font-family: "Calibri";
                padding: 80px 0px 0px 80px;
                margin: 50px;
            }
            
        </style> 
    </body>
</html>
