@extends('layouts.main')


@section('content')
    <div class="container text-xl-center admin-text">
        Здесь Вы можете добавить, изменить или удалить новость, а так же выбрать, будет ли она отображаться на главной странице и будет ли она отображаться на сайте.
    </div>

    <div class="block">

        <div class="block-content block-content-narrow">
            <form class="form-horizontal" action="{{ route('admin-news.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label class="col-sm-12" for="img_url">Выберите фотографию для новости</label>
                    <div class="col-sm-12">
                        <input type="file" id="img_url" name="img_url">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="date">Введите дату новости</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="date" name="date">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="title_kz">Заголовок на казахском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="title_kz" name="title_kz">
                    </div>
                </div>
               <div class="block">
                    <div class="block">
                        <h3 class="block-title">Текст новости на казахском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="text_kz" class="col-sm-12"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="title_ru">Заголовок на русском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="title_ru" name="title_ru">
                    </div>
                </div>
               <div class="block">
                    <div class="block">
                        <h3 class="block-title">Текст новости на русском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="text_ru" class="col-sm-12"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="title_en">Заголовок на английском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="title_en" name="title_en">
                    </div>
                </div>
               <div class="block">
                    <div class="block">
                        <h3 class="block-title">Текст новости на английском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="text_en" class="col-sm-12"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="show_on_main">Показывать на главной странице?</label>
                    <div class="col-sm-12">
                        <select class="form-control" id="show_on_main" name="show_on_main" size="1">
                            <option value="1">Показывать</option>
                            <option value="0">Не показывать</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-12" for="is_active">Показывать на сайте?</label>
                    <div class="col-sm-12">
                        <select class="form-control" id="is_active" name="is_active" size="1">
                            <option value="1">Показывать</option>
                            <option value="0">Не показывать</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button class="btn btn-sm btn-success" type="submit">Загрузить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @isset($news)
        @if (count($news) == 0)
            <div class="container text-xl-center admin-text">
                Вы пока не добавили никакой информации
            </div>
        @else
            <div class="container text-xl-center admin-text">
                Уже добавленная информация
            </div>

            <table class="table table-striped mb-5">
                <tbody>
                    <tr>
                        <td>
                            <b>Заголовок</b>
                        </td>
                        <td>
                            <b>Дата</b>
                        </td>
                        <td>
                            <b>Отображение на главной странице</b>
                        </td>
                        <td>
                            <b>Отображение на сайте</b>
                        </td>
                        <td>
                            <b>Редактирование информации</b>
                        </td>
                        <td>
                            <b>Удаление информации</b>
                        </td>
                    </tr>
                    @foreach($news as $eachNews)
                        <tr>
                            <td>
                                {{ $eachNews->title_ru }}
                            </td>
                            <td>
                                {{ $eachNews->date }}
                            </td>
                            <td>
                                @if ($eachNews->show_on_main == 1)
                                    Информация отображается на главной странице
                                @else
                                    Информация не отображается на главной странице
                                @endif
                            </td>
                            <td>
                                @if ($eachNews->is_active == 1)
                                    Информация отображается на сайте
                                @else
                                    Информация не отображается на сайте
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin-news.edit', $eachNews->id )}}" class="btn btn-info"> Редактировать </a>
                            </td>
                            <td>
                                <form action="{{ route('admin-news.destroy', $eachNews->id )}}" method="post">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button class="btn btn-danger" type="submit">Удалить</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    @endisset

@endsection
