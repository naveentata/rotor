@extends('layout')

@section('title')
    FAQ по сайту
@stop

@section('content')

    <h1>FAQ по сайту</h1>

    <b>Для чего регистрироваться</b><br>
    Регистрация предназначена для тех, кто намерен часто заходить на сайт и иметь полный доступ ко все разделам сайта<br>
    После регистрации у вас появятся новые возможности:<br>

    <b>1</b>. Повышать свой статус (после 6 месяцев пребывания на сайте, вы сможете изменить статус на персональный)<br>
    <b>2</b>. Добавлять свои фотографии в галерею и анкету (Вес картинки не должен превышать {{ formatSize(setting('filesize')) }})<br>
    <b>3</b>. Изменять репутацию другим  пользователям сайта положительными или отрицательным голосом (При активе {{  plural(setting('editratingpoint'), setting('scorename')) }})<br>
    <b>4</b>. Иметь свой собственный контакт и игнор-листы<br>
    <b>5</b>. Изменять темы/скины по своему желанию, которая будет включаться автоматически при авторизации (Большой выбор скинов)<br>
    <b>6</b>. Общаться по внутренней почте сайта с пользователями сайта, писать под своим аккаунтом в гостевой, комментариях, форуме<br>
    <b>7</b>. Участвовать в голосованиях на различные темы<br>
    <b>8</b>. Добавлять свои объявления, на определенный срок (Купля,продажа,вакансии,услуги,обмен и т.д.)<br>
    <b>9</b>. Изменять под себя настройки сайта, в частности количество показываемых сообщений в любых сервисах (гостевая, форум и пр.) Чем можно снизить трафик передаваемой информации<br>

    <br>При наборе определенного количества актива, пользователю открываются новые возможности:<br>

    @if (!empty(setting('addofferspoint')))
        <b>{{ plural(setting('addofferspoint'), setting('scorename')) }}</b> - создание тем в "Предложенияx и проблемах"<br>
    @endif

    @if (!empty(setting('forumloadpoints')))
        <b>{{ plural(setting('forumloadpoints'), setting('scorename')) }}</b> - Прикрепление файлов в форуме<br>
    @endif

    @if (!empty(setting('sendmoneypoint')))
        <b>{{ plural(setting('sendmoneypoint'), setting('scorename')) }}</b> - перечисление игровых денег<br>
    @endif

    @if (!empty(setting('editratingpoint')))
        <b>{{ plural(setting('editratingpoint'), setting('scorename')) }}</b> - изменение репутации пользователям<br>
    @endif

    @if (!empty(setting('editforumpoint')))
        <b>{{ plural(setting('editforumpoint'), setting('scorename')) }}</b> - изменение и закрытие своих тем на форуме<br>
    @endif

    @if (!empty(setting('advertpoint')))
        <b>{{ plural(setting('advertpoint'), setting('scorename')) }}</b> - исчезает вся реклама на главной странице сайта<br>
    @endif

    <br>

    <b>Как проходит регистрация</b><br>
    <b>1</b>. Вводите желаемый логин и пароль<br>
    <b>2</b>. Указываете свой email и проверочный код<br>
    <b>3</b>. Нажимаете кнопку регистрации и создается ваш профиль<br>
    <b>4</b>. Теперь если включена функция подтверждения регистрации, то вам на email будет выслан мастер-ключ, который необходим для подтверждения регистрации<br>
    <b>5</b>. Если подтверждение регистрации выключено, то после входа на сайт вы становитесь полноправным пользователем сайта<br>
    <b>6</b>. Теперь вы можете добавить побольше информации о себе в профиле, а также изменить свои настройки<br>

    <br><b>Зачем нужен статус и репутацию</b><br>
    Статус нужен для того, чтобы оценить вашу активность на сайте. За каждое сообщение в гостевой, форуме, комментариях начисляется актив. Чем больше актива, тем выше статус.<br>
    Репутация нужен для того, чтобы показать ваше значение на сайте. Чем больше у вас положительных голосов, тем больше доверия к вам<br>

    <br><b>Что мне даст высокий статус</b><br>
    Самых активных, инициативных и старающихся пользователей могут взять в команду администрации сайта (конечно если у вас есть желание). Но войти в команду не так легко, так как вакансии ограничены. Старайтесь не нарушать правила и у вас будет возможность. Самые активные пользователи всегда находятся на первых местах рейтингах.<br>

    <br><b>Как я могу повлиять на дальнейшее развитие сайта</b><br>
    Активно участвуйте во всем, чаще заходите на сайт, советуйте сайт одноклассникам, одногруппникам, друзьям, знакомым и всем тем кто знает что такое интернет. К нам можно легко зайти как с компьютера так и с мобильного телефона или КПК, так как сайт имеет Wap и Web форматы<br>

    <br><b>Не нашли ответа на интересующий себя вопрос?</b><br>
    Напишите об этом <a href="/mail">администратору</a>, <a href="/adminlist">старшим сайта</a> через внутреннюю почту или создавайте тему на форуме где будем вместе обсуждать вопрос, делиться опытом и знаниями<br><br>

@stop
