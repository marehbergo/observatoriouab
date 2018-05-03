// *
// * Adicionar multiplos marcadores
// * 2013 - www.marnoto.com
// *

// Váriáveis necessárias
var map;
var infoWindow;

// A variável markersData guarda a informação necessária a cada marcador
// Para utilizar este código basta alterar a informação contida nesta variável
var markersData = [
    {
        id: "Andrelândia - MG",
        lat: -21.744978,
        lng: -44.325318,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ADMINISTRACAO PUBLICA"+"<br>"+"ENSINO DE SOCIOLOGIA NO ENSINO MEDIO"+"<br>"+"PRATICAS DE LETRAMENTO E ALFABETIZACAO"
    },
    {
        id: "Araras - SP",
        lat: -22.364446,
        lng: -47.379063,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"CUIDADO PRE-NATAL"+"<br>"+"EDUCACAO EMPREENDEDORA"+"<br>"+"EDUCACAO MUSICAL"+"<br>"+"ENSINO DE CIENCIAS"+"<br>"+"GESTAO EM ENFERMAGEM"+"<br>"+"GESTAO PUBLICA"+"<br>"+"MIDIAS NA EDUCACAO"+"<br>"+"PRATICAS DE LETRAMENTO E ALFABETIZACAO"+"<br>"+"TECNOLOGIA SUCROALCOOLEIRA"+"<br>"+"TECNOLOGIAS, FORMACAO DE PROFESSORES E SOCIEDADE"
    },
    {
        id: "Araxá - MG",
        lat: -19.590197,
        lng: -46.931146,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"PEDAGOGIA"+"<br>"+"ADMINISTRACAO PUBLICA"+"<br>"+"COMPUTACAO"+"<br>"+"ENSINO DE FILOSOFIA NO ENSINO MEDIO"+"<br>"+"ENSINO DE SOCIOLOGIA NO ENSINO MEDIO"+"<br>"+"ESPORTES E ATIVIDADES FISICAS INCLUSIVAS PARA PESSOAS COM DEFICIENCIA"+"<br>"+"GESTAO EM SAUDE"+"<br>"+"GESTAO PUBLICA"+"<br>"+"GESTAO PUBLICA MUNICIPAL"+"<br>"+"LETRAS INGLES"+"<br>"+"LETRAS PORTUGUES"+"<br>"+"MATEMATICA"+"<br>"+"MIDIAS NA EDUCACAO"+"<br>"+"PEDAGOGIA"+"<br>"+"PLANEJAMENTO, IMPLEMENTACAO E GESTAO DA EDUCACAO A DISTANCIA"+"<br>"+"PRATICAS DE LETRAMENTO E ALFABETIZACAO"
    },
    {
        //id: "Barretos - SP",
        lat: -20.533924,
        lng: -48.573067,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"GEOGRAFIA"+"<br>"+"ADMINISTRACAO PUBLICA"+"<br>"+"ARTES VISUAIS"+"<br>"+"EDUCACAO PARA O PATRIMONIO CULTURAL E ARTÍSTICO"+"<br>"+"GEOGRAFIA"+"<br>"+"GESTAO EM ENFERMAGEM"+"<br>"+"SOCIOLOGIA NO ENSINO MEDIO"+"<br>"+"TECNOLOGIA SUCROALCOOLEIRA"
    },
    {
        //id: "Barroso - MG",
        lat: -21.185662,
        lng: -43.970570,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ADMINISTRACAO PUBLICA"+"<br>"+"COMPUTACAO"+"<br>"+"EDUCACAO EMPREENDEDORA"+"<br>"+"ENSINO DE SOCIOLOGIA NO ENSINO MEDIO"+"<br>"+"FILOSOFIA"+"<br>"+"FISICA"+"<br>"+"GESTAO EM SAUDE"+"<br>"+"GESTAO PUBLICA MUNICIPAL"+"<br>"+"MIDIAS NA EDUCACAO"+"<br>"+"PEDAGOGIA"+"<br>"+"PRATICAS DE LETRAMENTO E ALFABETIZACAO"
    },
    {
        id: "Bicas - MG",
        lat: -21.718936,
        lng: -43.063255,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ADMINISTRACAO PUBLICA"+"<br>"+"EDUCAÇÃO INCLUSIVA"+"<br>"+"HISTÓRIA E CULTURA NO BRASIL CONTEMPORÂNEO"+"<br>"+"MATEMATICA"+"<br>"+"PEDAGOGIA"+"<br>"+"TECNOLOGIAS DIGITAIS DE INFORMACAO E COMUNICACAO PARA O ENSINO BASICO"
    },
    {
        //id: "Boa Esperança - MG",
        lat: -21.104762,
        lng: -45.558273,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ADMINISTRACAO PUBLICA"+"<br>"+"CIENCIAS BIOLOGICAS"+"<br>"+"DESIGN INSTRUCIONAL PARA EAD VIRTUAL"+"<br>"+"EDUCACAO FISICA"+"<br>"+"ENSINO DE ARTES VISUAIS"+"<br>"+"ESPORTES E ATIVIDADES FISICAS INCLUSIVAS PARA PESSOAS COM DEFICIENCIA"+"<br>"+"FILOSOFIA"+"<br>"+"FISICA"+"<br>"+"GESTAO DE PESSOAS"+"<br>"+"GESTAO EM SAUDE"+"<br>"+"GESTAO PUBLICA MUNICIPAL"+"<br>"+"MATEMATICA"+"<br>"+"PEDAGOGIA"+"<br>"+"TECNOLOGIAS DIGITAIS DE INFORMACAO E COMUNICACAO PARA O ENSINO BASICO"+"<br>"+"TEORIAS E PRATICAS NA EDUCACAO"
    },
    {
        //id: "Bragança Paulista - SP",
        lat: -22.934546,
        lng: -46.538191,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"PRATICAS DE LETRAMENTO E ALFABETIZACAO"+"<br>"+"GESTAO PUBLICA MUNICIPAL"+"<br>"+"PRATICAS DE LETRAMENTO E ALFABETIZACAO"
    },
    {
        //id: "Campo Belo - MG",
        lat: -20.905755,
        lng: -45.268177,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"LETRAS PORTUGUES"+"<br>"+"FILOSOFIA"+"<br>"+"LETRAS PORTUGUES"+"<br>"+"PEDAGOGIA"+"<br>"+"PRODUCAO DE MATERIAL DIDATICO UTILIZANDO O LINUX EDUCACIONAL"
    },
    {
        id: "Campos Gerais - MG",
        lat: -21.240349,
        lng: -45.759889,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"TEORIAS E PRATICAS NA EDUCACAO"+"<br>"+"ADMINISTRACAO PUBLICA"+"<br>"+"GEOGRAFIA"+"<br>"+"QUIMICA"+"<br>"+"TEORIAS E PRATICAS NA EDUCACAO"+"<br>"+"USO EDUCACIONAL DA INTERNET"
    },
    {
        id: "Carandaí - MG",
        lat: -20.952553,
        lng: -43.802204,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ADMINISTRACAO PUBLICA"+"<br>"+"EDUCACAO EMPREENDEDORA"+"<br>"+"EDUCAÇÃO INCLUSIVA"+"<br>"+"MIDIAS NA EDUCACAO"+"<br>"+"PRATICAS DE LETRAMENTO E ALFABETIZACAO"
    },
    {
        id: "Diadema - SP",
        lat: -23.689143,
        lng: -46.626909,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"CIENCIA E TECNOLOGIA"+"<br>"+"CUIDADO PRE-NATAL"+"<br>"+"ENSINO DE FILOSOFIA NO ENSINO MEDIO"+"<br>"+"ENSINO DE LINGUA PORTUGUESA E LITERATURA"+"<br>"+"ENSINO DE QUIMICA"
    },
    {
        id: "Divinolândia de Minas - MG",
        lat: -18.804302,
        lng: -42.615315,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"EDUCACAO EMPREENDEDORA"+"<br>"+"ENSINO DE GEOGRAFIA"+"<br>"+"GEOGRAFIA"+"<br>"+"PEDAGOGIA"
    },
    {
        id: "Formiga - MG",
        lat: -20.462420,
        lng: -45.439818,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ADMINISTRACAO PUBLICA"+"<br>"+"CIENCIAS BIOLOGICAS"+"<br>"+"FILOSOFIA"+"<br>"+"GEOGRAFIA"+"<br>"+"GESTAO PUBLICA (PNAP)"+"<br>"+"LETRAS PORTUGUES"+"<br>"+"USO EDUCACIONAL DA INTERNET"
    },
    {
        id: "Franca - SP",
        lat: -20.545343,
        lng: -47.401291,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ADMINISTRACAO PUBLICA"+"<br>"+"DESIGN INSTRUCIONAL PARA EAD VIRTUAL"+"<br>"+"EDUCACAO MUSICAL"+"<br>"+"ENSINO DE CIENCIAS"+"<br>"+"ENSINO DE SOCIOLOGIA NO ENSINO MEDIO"+"<br>"+"FILOSOFIA"+"<br>"+"GESTAO PUBLICA"+"<br>"+"GESTAO PUBLICA MUNICIPAL"+"<br>"+"MATEMATICA"+"<br>"+"PEDAGOGIA"+"<br>"+"PRATICAS DE LETRAMENTO E ALFABETIZACAO"+"<br>"+"SISTEMAS DE INFORMACAO"+"<br>"+"TECNOLOGIAS EDUCACIONAIS PARA O ENSINO DA SAÚDE NA ESCOLA"
    },
    {
        id: "Francisco Sá - MG",
        lat: -16.478220,
        lng: -43.491877,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ADMINISTRACAO PUBLICA"+"<br>"+"CIENCIAS BIOLOGICAS"+"<br>"+"CIENCIAS SOCIAIS"+"<br>"+"EDUCACAO POPULAR E VALORES HUMANOS"+"<br>"+"ENSINO DE FILOSOFIA NO ENSINO MEDIO"+"<br>"+"FILOSOFIA"+"<br>"+"GESTAO EM SAUDE"+"<br>"+"GESTAO PUBLICA MUNICIPAL"+"<br>"+"LETRAS PORTUGUES"+"<br>"+"LINGUISTICA APLICADA AO ENSINO DO PORTUGUES"+"<br>"+"PEDAGOGIA"
    },
    {
        id: "Ilicínea - MG",
        lat: -20.939585,
        lng: -45.825596,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"CIENCIAS BIOLOGICAS"+"<br>"+"COMPUTACAO"+"<br>"+"FISICA"+"<br>"+"MATEMATICA"+"<br>"+"PEDAGOGIA"+"<br>"+"QUIMICA"
    },
    {
        id: "Ipanema - MG",
        lat: -19.800639,
        lng: -41.717056,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ADMINISTRACAO PUBLICA"+"<br>"+"EDUCACAO FISICA"+"<br>"+"PEDAGOGIA"
    },
    {
        id: "Itamarandiba - MG",
        lat: -17.853253,
        lng: -42.856651,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ADMINISTRACAO PUBLICA"+"<br>"+"CIENCIAS SOCIAIS"+"<br>"+"EDUCACAO A DISTANCIA"+"<br>"+"FILOSOFIA"+"<br>"+"GEOGRAFIA"+"<br>"+"GESTAO EM SAUDE"+"<br>"+"GESTAO MUNICIPAL"+"<br>"+"LETRAS - LINGUA BRASILEIRA DE SINAIS"+"<br>"+"LETRAS PORTUGUES"+"<br>"+"MATEMATICA"+"<br>"+"PEDAGOGIA"
    },
    {
        id: "Itamonte - MG",
        lat: -22.285593,
        lng: -44.870377,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"DESIGN INSTRUCIONAL PARA EAD VIRTUAL"+"<br>"+"EDUCACAO EMPREENDEDORA"+"<br>"+"FISICA"+"<br>"+"PRATICAS DE LETRAMENTO E ALFABETIZACAO"
    },
    {
        id: "Jaboticatubas - MG",
        lat: -19.522206,
        lng: -43.730895,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ADMINISTRACAO PUBLICA"+"<br>"+"FILOSOFIA"+"<br>"+"FORMAÇÃO DE EDUCADORES EM SAÚDE - CEFES"+"<br>"+"GESTAO DE INSTITUICOES FEDERAIS DE EDUCACAO SUPERIOR"+"<br>"+"GESTAO EM SAUDE"+"<br>"+"GESTAO PUBLICA"+"<br>"+"GESTAO PUBLICA MUNICIPAL"+"<br>"+"PEDAGOGIA"
    },
    {
        id: "Jaú - SP",
        lat: -22.295097,
        lng: -48.560188,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ADMINISTRACAO PUBLICA"+"<br>"+"ENSINO DE FILOSOFIA NO ENSINO MEDIO"+"<br>"+"PEDAGOGIA"+"<br>"+"SISTEMAS DE INFORMACAO"
    },
    {
        id: "Juiz de Fora - MG",
        lat: -21.749053,
        lng: -43.350937,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ADMINISTRACAO PUBLICA"+"<br>"+"CIENCIAS BIOLOGICAS"+"<br>"+"COMPUTACAO"+"<br>"+"CONHECIMENTOS TRADICIONAIS E PRÁTICAS ESCOLARES NA EDUCAÇÃO BÁSICA"+"<br>"+"EDUCAÇÃO INCLUSIVA"+"<br>"+"ENSINO DE ARTES VISUAIS"+"<br>"+"FISICA"+"<br>"+"GESTAO EM SAUDE"+"<br>"+"GESTAO PUBLICA"+"<br>"+"GESTAO PUBLICA MUNICIPAL"+"<br>"+"MATEMATICA"+"<br>"+"MIDIAS NA EDUCACAO"+"<br>"+"QUIMICA"+"<br>"+"TECNOLOGIAS DIGITAIS DE INFORMACAO E COMUNICACAO PARA O ENSINO BASICO"
    },
    {
        id: "Lavras - MG",
        lat: -21.233463,
        lng: -44.997857,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ADMINISTRACAO PUBLICA"+"<br>"+"FISICA"+"<br>"+"GESTAO PUBLICA (PNAP)"+"<br>"+"GESTAO PUBLICA MUNICIPAL"+"<br>"+"MIDIAS NA EDUCACAO"+"<br>"+"PEDAGOGIA"+"<br>"+"PRODUCAO DE MATERIAL DIDATICO UTILIZANDO O LINUX EDUCACIONAL"+"<br>"+"USO EDUCACIONAL DA INTERNET"
    },
    {
        id: "Matão - SP",
        lat: -21.607643,
        lng: -48.367977,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ADMINISTRACAO PUBLICA"+"<br>"+"ENSINO DE SOCIOLOGIA NO ENSINO MEDIO"+"<br>"+"GESTAO PUBLICA"+"<br>"+"GESTAO PUBLICA MUNICIPAL"+"<br>"+"MATEMATICA"+"<br>"+"MIDIAS NA EDUCACAO"+"<br>"+"PEDAGOGIA"
    },
    {
        id: "Monte Sião - MG",
        lat: -22.424046,
        lng: -46.579554,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"EDUCACAO EMPREENDEDORA"+"<br>"+"FILOSOFIA"+"<br>"+"MIDIAS NA EDUCACAO"
    },
    {
        id: "Nova Serrana - MG",
        lat: -19.877849,
        lng: -44.990216,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ADMINISTRACAO PUBLICA"+"<br>"+"FILOSOFIA"+"<br>"+"PEDAGOGIA"
    },
    {
        id: "Paraisópolis - MG",
        lat: -22.556344,
        lng: -45.776168,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"FILOSOFIA"+"<br>"+"GESTAO PUBLICA"
    },
    {
        id: "Passos - MG",
        lat: -20.724799,
        lng: -46.609252,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ADMINISTRACAO PUBLICA"+"<br>"+"GEOGRAFIA"+"<br>"+"GESTAO PUBLICA MUNICIPAL"+"<br>"+"MATEMATICA"+"<br>"+"MIDIAS NA EDUCACAO"+"<br>"+"PEDAGOGIA"+"<br>"+"PRATICAS PEDAGOGICAS"
    },
    {
        id: "Patos de Minas - MG",
        lat: -18.579612,
        lng: -46.525841,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ADMINISTRACAO PUBLICA"+"<br>"+"ENSINO DE SOCIOLOGIA NO ENSINO MEDIO"+"<br>"+"FILOSOFIA"+"<br>"+"LETRAS INGLES"+"<br>"+"PEDAGOGIA"
    },
    {
        id: "Pompéu - MG",
        lat: -19.238250,
        lng: -45.008237,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ADMINISTRACAO PUBLICA"+"<br>"+"CURSO SUPERIOR DE TECNOLOGIA EM ANALISE E DESENVOLVIMENTO DE SISTEMAS"+"<br>"+"EDUCACAO FISICA"+"<br>"+"EDUCACAO FISICA ESCOLAR"+"<br>"+"FILOSOFIA"+"<br>"+"GEOGRAFIA"+"<br>"+"PEDAGOGIA"
    },
    {
        id: "Sabará - MG",
        lat: -19.893375,
        lng: -43.812268,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"FILOSOFIA"+"<br>"+"GESTAO PUBLICA MUNICIPAL"+"<br>"+"MIDIAS NA EDUCACAO"
    },
    {
        id: "Santa Isabel - SP",
        lat: -23.338837,
        lng: -46.229462,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"GESTAO EM SAUDE"+"<br>"+"GESTAO PUBLICA MUNICIPAL"
    },
    {
        id: "Santa Rita de Caldas - MG",
        lat: -22.028128,
        lng: -46.338357,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ADMINISTRACAO PUBLICA"+"<br>"+"EDUCACAO FISICA"+"<br>"+"GESTAO DE PESSOAS"+"<br>"+"GESTAO EDUCACIONAL"+"<br>"+"GESTAO EM SAUDE"+"<br>"+"GESTAO PUBLICA"+"<br>"+"TEORIAS E PRATICAS NA EDUCACAO"
    },
    {
        id: "São João da Boa Vista - SP",
        lat: -21.969042,
        lng: -46.794302,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"DESIGN INSTRUCIONAL PARA EAD VIRTUAL"+"<br>"+"EDUCACAO EMPREENDEDORA"+"<br>"+"FILOSOFIA"+"<br>"+"GESTAO PUBLICA MUNICIPAL"+"<br>"+"HISTORIA"+"<br>"+"MATEMATICA"+"<br>"+"MIDIAS NA EDUCACAO"+"<br>"+"PEDAGOGIA"
    },
    {
        id: "São João da Ponte - MG",
        lat: -15.931557,
        lng: -44.007062,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ADMINISTRACAO PUBLICA"+"<br>"+"CIENCIAS SOCIAIS"+"<br>"+"ENSINO DE FILOSOFIA PARA O ENSINO MEDIO"+"<br>"+"ENSINO DE MATEMATICA PARA O ENSINO MEDIO"+"<br>"+"ENSINO DE SOCIOLOGIA NO ENSINO MEDIO"+"<br>"+"FILOSOFIA"+"<br>"+"GESTAO EM SAUDE"
    },
    {
        id: "São João del Rei - MG",
        lat: -21.139509,
        lng: -44.269541,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ADMINISTRACAO PUBLICA"+"<br>"+"EDUCACAO EMPREENDEDORA"+"<br>"+"ENSINO DE FILOSOFIA NO ENSINO MEDIO"+"<br>"+"ENSINO DE SOCIOLOGIA NO ENSINO MEDIO"+"<br>"+"GESTAO PUBLICA"+"<br>"+"MIDIAS NA EDUCACAO"+"<br>"+"PRATICAS DE LETRAMENTO E ALFABETIZACAO"
    },
    {
        id: "São José do Rio Preto - SP",
        lat: -20.817039,
        lng: -49.387917,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"FILOSOFIA"+"<br>"+"PEDAGOGIA"
    },
    {
        id: "BALNEARIO SAO FRANCISCO - São Paulo - SP",
        lat: -23.704717,
        lng: -46.644054,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"GESTAO PUBLICA"+"<br>"+"INFORMATICA EM SAUDE"+"<br>"+"PEDAGOGIA"
    },
    {
        id: "CANGAIBA - São Paulo - SP",
        lat: -23.498576,
        lng: -46.496290,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ENSINO DE FILOSOFIA NO ENSINO MEDIO"+"<br>"+"GESTAO PUBLICA MUNICIPAL"+"<br>"+"PEDAGOGIA"
    },
    {
        id: "CHACARA DONA OLIVIA - São Paulo - SP",
        lat: -23.513346,
        lng: -46.389880,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"GESTAO DA EDUCACAO PUBLICA"+"<br>"+"GESTAO PUBLICA"+"<br>"+"PEDAGOGIA"
    },
    {
        id: "INTERLAGOS - São Paulo - SP",
        lat: -23.710882,
        lng: -46.704279,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"GESTAO DA EDUCACAO PUBLICA"+"<br>"+"GESTAO EM ENFERMAGEM"+"<br>"+"GESTAO PUBLICA"+"<br>"+"PEDAGOGIA"+"<br>"+"PLANEJAMENTO, IMPLEMENTACAO E GESTAO DA EDUCACAO A DISTANCIA"
    },
    {
        id: "JARAGUA - São Paulo - SP",
        lat: -23.481621,
        lng: -46.762765,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ENSINO DE FILOSOFIA NO ENSINO MEDIO"+"<br>"+"GESTAO DA EDUCACAO PUBLICA"+"<br>"+"GESTAO PUBLICA"+"<br>"+"PEDAGOGIA"+"<br>"+"TECNOLOGIAS, COMUNICACAO E TECNICAS DE ENSINO"
    },
    {
        id: "JARDIM ESMERALDA - São Paulo - SP",
        lat: -23.583140,
        lng: -46.750045,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"CUIDADO PRE-NATAL"+"<br>"+"EDUCACAO FISICA"+"<br>"+"ENSINO DE FILOSOFIA NO ENSINO MEDIO"+"<br>"+"GESTAO EM ENFERMAGEM"+"<br>"+"GESTAO PUBLICA MUNICIPAL"+"<br>"+"INFORMATICA EM SAUDE"+"<br>"+"MIDIAS NA EDUCACAO"+"<br>"+"PEDAGOGIA"+"<br>"+"PRATICAS EDUCACIONAIS EM CIENCIAS E PLURALIDADE"
    },
    {
        id: "JARDIM GUAPIRA - São Paulo - SP",
        lat: -23.457122,
        lng: -46.584730,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"GESTAO DA EDUCACAO PUBLICA"+"<br>"+"GESTAO PUBLICA MUNICIPAL"+"<br>"+"INFORMATICA EM SAUDE"+"<br>"+"PEDAGOGIA"
    },
    {
        id: "JARDIM MIRANGAIA - São Paulo - SP",
        lat: -23.495047,
        lng: -46.412393,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ENSINO DE FILOSOFIA NO ENSINO MEDIO"+"<br>"+"GESTAO PUBLICA MUNICIPAL"+"<br>"+"MIDIAS NA EDUCACAO"+"<br>"+"PEDAGOGIA"+"<br>"+"TECNOLOGIAS, COMUNICACAO E TECNICAS DE ENSINO"
    },
    {
        id: "JARDIM MORENO - São Paulo - SP",
        lat: -23.538769,
        lng: -46.423247,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ENSINO DE FILOSOFIA NO ENSINO MEDIO"+"<br>"+"GESTAO PUBLICA MUNICIPAL"+"<br>"+"INFORMATICA EM SAUDE"+"<br>"+"LETRAS PORTUGUES"+"<br>"+"MATEMATICA"+"<br>"+"PEDAGOGIA"
    },
    {
        id: "JARDIM PAULISTANO (ZONA NORTE) - São Paulo - SP",
        lat: -23.462468,
        lng: -46.712151,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"GESTAO PUBLICA"+"<br>"+"INFORMATICA EM SAUDE"+"<br>"+"LETRAS PORTUGUES"+"<br>"+"MATEMATICA"+"<br>"+"PEDAGOGIA"+"<br>"+"PLANEJAMENTO, IMPLEMENTACAO E GESTAO DA EDUCACAO A DISTANCIA"+"<br>"+"TECNOLOGIAS NO ENSINO DE MATEMATICA"
    },
    {
        id: "JARDIM SANTA LUCRECIA - São Paulo - SP",
        lat: -23.436311,
        lng: -46.750458,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ENSINO DE FILOSOFIA NO ENSINO MEDIO"+"<br>"+"GESTAO PUBLICA MUNICIPAL"+"<br>"+"INFORMATICA INSTRUMENTAL APLICADA A EDUCACAO"+"<br>"+"PEDAGOGIA"+"<br>"+"PLANEJAMENTO, IMPLEMENTACAO E GESTAO DA EDUCACAO A DISTANCIA"
    },
    {
        id: "JARDIM SAO CARLOS (ZONA LESTE) - São Paulo - SP",
        lat: -23.510035,
        lng: -46.472982,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ENSINO DE FILOSOFIA NO ENSINO MEDIO"+"<br>"+"ENSINO DE QUIMICA"+"<br>"+"GESTAO EM ENFERMAGEM"+"<br>"+"GESTAO PUBLICA"+"<br>"+"INFORMATICA EM SAUDE"+"<br>"+"LETRAS PORTUGUES"+"<br>"+"PEDAGOGIA"
    },
    {
        id: "JARDIM SAO ROBERTO - São Paulo - SP",
        lat: -23.621481,
        lng: -46.500956,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"GESTAO PUBLICA MUNICIPAL"+"<br>"+"PEDAGOGIA"
    },
    {
        id: "PARAISOPOLIS - São Paulo - SP",
        lat: -23.622560,
        lng: -46.727831,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"GESTAO DA EDUCACAO PUBLICA"+"<br>"+"GESTAO PUBLICA"
    },
    {
        id: "PIRAJUSSARA - São Paulo - SP",
        lat: -23.637217,
        lng: -46.779736,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"GESTAO PUBLICA"+"<br>"+"PEDAGOGIA"
    },
    {
        id: "VILA DAS BELEZAS - São Paulo - SP",
        lat: -23.646406,
        lng: -46.744342,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ENSINO DE FILOSOFIA NO ENSINO MEDIO"+"<br>"+"GESTAO DA EDUCACAO PUBLICA"+"<br>"+"GESTAO PUBLICA MUNICIPAL"+"<br>"+"PEDAGOGIA"
    },
    {
        id: "São Sebastião do Paraíso - MG",
        lat: -20.921031,
        lng: -46.977280,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"CIENCIAS BIOLOGICAS"+"<br>"+"ENSINO DE FILOSOFIA NO ENSINO MEDIO"+"<br>"+"ENSINO DE SOCIOLOGIA NO ENSINO MEDIO"+"<br>"+"FILOSOFIA"+"<br>"+"GESTAO EM SAUDE"+"<br>"+"GESTAO PUBLICA MUNICIPAL"+"<br>"+"MATEMATICA"+"<br>"+"MIDIAS NA EDUCACAO"+"<br>"+"PEDAGOGIA"+"<br>"+"PRATICAS DE LETRAMENTO E ALFABETIZACAO"+"<br>"+"PRODUCAO DE MATERIAL DIDATICO UTILIZANDO O LINUX EDUCACIONAL"+"<br>"+"TEORIAS E PRATICAS NA EDUCACAO"
    },
    {
        id: "Serrana - SP",
        lat: -21.200795,
        lng: -47.596982,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ADMINISTRACAO PUBLICA"+"<br>"+"EDUCACAO EMPREENDEDORA"+"<br>"+"EDUCACAO FISICA"+"<br>"+"ENSINO DE FILOSOFIA NO ENSINO MEDIO"+"<br>"+"FILOSOFIA"+"<br>"+"GESTAO EM SAUDE"+"<br>"+"MIDIAS NA EDUCACAO"+"<br>"+"MIDIAS NA EDUCACAO"
    },
    {
        id: "Sete Lagoas - MG",
        lat: -19.457670,
        lng: -44.210957,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ADMINISTRACAO PUBLICA"+"<br>"+"EDUCAÇÃO EM CIÊNCIAS"+"<br>"+"EDUCACAO EMPREENDEDORA"+"<br>"+"EDUCACAO FISICA"+"<br>"+"ELABORACAO, GESTAO E AVALIACAO EM PROJETOS SOCIAIS"+"<br>"+"ESPORTES E ATIVIDADES FISICAS INCLUSIVAS PARA PESSOAS COM DEFICIENCIA"+"<br>"+"GESTAO DE INSTITUICOES FEDERAIS DE EDUCACAO SUPERIOR"+"<br>"+"GESTÃO DO CUIDADO EM SAÚDE DA FAMÍLIA"+"<br>"+"GESTÃO EM SAÚDE"+"<br>"+"GESTAO PUBLICA (PNAP)"+"<br>"+"GESTÃO PÚBLICA MUNICIPAL"+"<br>"+"MATEMATICA"+"<br>"+"MIDIAS NA EDUCACAO"+"<br>"+"PEDAGOGIA"+"<br>"+"TECNOLOGIAS DIGITAIS DE INFORMACAO E COMUNICACAO PARA O ENSINO BASICO"
    },
    {
        id: "Timóteo - MG",
        lat: -19.538369,
        lng: -42.646314,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"COMPUTACAO"+"<br>"+"ENSINO DE FILOSOFIA NO ENSINO MEDIO"+"<br>"+"ENSINO DE SOCIOLOGIA NO ENSINO MEDIO"+"<br>"+"ESPORTES E ATIVIDADES FISICAS INCLUSIVAS PARA PESSOAS COM DEFICIENCIA"+"<br>"+"FILOSOFIA"+"<br>"+"FISICA"+"<br>"+"GESTAO EM SAUDE"+"<br>"+"GESTAO PUBLICA"+"<br>"+"GESTAO PUBLICA MUNICIPAL"+"<br>"+"MATEMATICA"+"<br>"+"PEDAGOGIA"+"<br>"+"PRATICAS DE LETRAMENTO E ALFABETIZACAO"
    },
    {
        id: "Tiradentes - MG",
        lat: -21.108142,
        lng: -44.166457,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"COMPUTACAO"+"<br>"+"ESPORTES E ATIVIDADES FISICAS INCLUSIVAS PARA PESSOAS COM DEFICIENCIA"+"<br>"+"MATEMATICA"+"<br>"+"PEDAGOGIA"
    },
    {
        id: "Ubá - MG",
        lat: -21.124078,
        lng: -42.918569,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ADMINISTRACAO PUBLICA"+"<br>"+"CIENCIAS BIOLOGICAS"+"<br>"+"COMPUTACAO"+"<br>"+"ENSINO DE ARTES VISUAIS"+"<br>"+"ESPORTES E ATIVIDADES FISICAS INCLUSIVAS PARA PESSOAS COM DEFICIENCIA"+"<br>"+"GESTAO EM SAUDE"+"<br>"+"GESTAO PUBLICA MUNICIPAL"+"<br>"+"MATEMATICA"+"<br>"+"PEDAGOGIA"+"<br>"+"TECNOLOGIAS DIGITAIS DE INFORMACAO E COMUNICACAO PARA O ENSINO BASICO"
    },
    {
        id: "Uberlândia - MG",
        lat: -18.888650,
        lng: -48.260957,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ADMINISTRACAO PUBLICA"+"<br>"+"MATEMATICA"+"<br>"+"MIDIAS NA EDUCACAO"+"<br>"+"PEDAGOGIA"
    },
    {
        id: "Votorantim - SP",
        lat: -23.542411,
        lng: -47.445715,
        nome: "Curos ofertados:"+"<br>"+"<br>"+"ADMINISTRACAO PUBLICA"+"<br>"+"EDUCACAO EMPREENDEDORA"+"<br>"+"FILOSOFIA"+"<br>"+"GESTAO PUBLICA"
    },
];

function initialize() {
   var mapOptions = {
      center: new google.maps.LatLng(-21.139509,-44.269541),
      zoom: 9,
      mapTypeId: 'roadmap',
   };

   map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

   // cria a nova Info Window com referência à variável infowindow
   // o conteúdo da Info Window será atribuído mais tarde
   infoWindow = new google.maps.InfoWindow();

   // evento que fecha a infoWindow com click no mapa
   google.maps.event.addListener(map, 'click', function() {
      infoWindow.close();
   });

   // Chamada para a função que vai percorrer a informação
   // contida na variável markersData e criar os marcadores a mostrar no mapa
   displayMarkers();
}
google.maps.event.addDomListener(window, 'load', initialize);

// Esta função vai percorrer a informação contida na variável markersData
// e cria os marcadores através da função createMarker
function displayMarkers(){

   // esta variável vai definir a área de mapa a abranger e o nível do zoom
   // de acordo com as posições dos marcadores
   var bounds = new google.maps.LatLngBounds();
   
   // Loop que vai estruturar a informação contida em markersData
   // para que a função createMarker possa criar os marcadores 
   for (var i = 0; i < markersData.length; i++){

      var latlng = new google.maps.LatLng(markersData[i].lat, markersData[i].lng);
      var nome = markersData[i].nome;

      createMarker(latlng, nome);

      // Os valores de latitude e longitude do marcador são adicionados à
      // variável bounds
      bounds.extend(latlng);  
   }

   // Depois de criados todos os marcadores
   // a API através da sua função fitBounds vai redefinir o nível do zoom
   // e consequentemente a área do mapa abrangida.
   map.fitBounds(bounds);
}

// Função que cria os marcadores e define o conteúdo de cada Info Window.
function createMarker(latlng, nome){
   var marker = new google.maps.Marker({
      map: map,
      position: latlng,
      title: nome
   });

   // Evento que dá instrução à API para estar alerta ao click no marcador.
   // Define o conteúdo e abre a Info Window.
   google.maps.event.addListener(marker, 'click', function() {
      
      // Variável que define a estrutura do HTML a inserir na Info Window.
      var iwContent = '<div id="iw_container">' +
            '<div class="iw_title">' + nome + '</div></div>';
      
      // O conteúdo da variável iwContent é inserido na Info Window.
      infoWindow.setContent(iwContent);

      // A Info Window é aberta.
      infoWindow.open(map, marker);
   });
}