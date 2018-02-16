@extends('layouts.application') 
@section('content')
<div class="page bg-white">
    <div class="page-aside">
      <!-- Contacts Sidebar -->
      <div class="page-aside-switch">
        <i class="icon wb-chevron-left" aria-hidden="true"></i>
        <i class="icon wb-chevron-right" aria-hidden="true"></i>
      </div>
      <div class="page-aside-inner page-aside-scroll scrollable is-enabled scrollable-vertical" style="position: relative;">
        <div data-role="container" class="scrollable-container" style="height: 429px; width: 276px;">
          <div data-role="content" class="scrollable-content" style="width: 259px;">
            <div class="page-aside-section">
              <div class="list-group">
                <a class="list-group-item justify-content-between" href="javascript:void(0)">
                  <span>
                    <i class="icon wb-inbox" aria-hidden="true"></i> All contacts
                  </span>
                  <span class="item-right">61</span>
                </a>
              </div>
            </div>
            <div class="page-aside-section">
              <h5 class="page-aside-title">LABEL</h5>
              <div class="list-group has-actions">
                <div class="list-group-item" data-plugin="editlist">
                  <div class="list-content">
                    <span class="item-right">10</span>
                    <span class="list-text">Work</span>
                    <div class="item-actions">
                      <span class="btn btn-pure btn-icon" data-toggle="list-editable"><i class="icon wb-edit" aria-hidden="true"></i></span>
                      <span class="btn btn-pure btn-icon" data-toggle="list-delete"><i class="icon wb-trash" aria-hidden="true"></i></span>
                    </div>
                  </div>
                  <div class="list-editable">
                    <div class="form-group form-material">
                      <input type="text" class="form-control empty" name="label" value="Work">
                      <button type="button" class="input-editable-close icon wb-close" data-toggle="list-editable-close" aria-label="Close" aria-expanded="true"></button>
                    </div>
                  </div>
                </div>
                <div class="list-group-item" data-plugin="editlist">
                  <div class="list-content">
                    <span class="item-right">5</span>
                    <span class="list-text">Family</span>
                    <div class="item-actions">
                      <span class="btn btn-pure btn-icon" data-toggle="list-editable"><i class="icon wb-edit" aria-hidden="true"></i></span>
                      <span class="btn btn-pure btn-icon" data-toggle="list-delete"><i class="icon wb-trash" aria-hidden="true"></i></span>
                    </div>
                  </div>
                  <div class="list-editable">
                    <div class="form-group form-material">
                      <input type="text" class="form-control empty" name="label" value="Family">
                      <button type="button" class="input-editable-close icon wb-close" data-toggle="list-editable-close" aria-label="Close" aria-expanded="true"></button>
                    </div>
                  </div>
                </div>
                <div class="list-group-item" data-plugin="editlist">
                  <div class="list-content">
                    <span class="item-right">16</span>
                    <span class="list-text">Private</span>
                    <div class="item-actions">
                      <span class="btn btn-pure btn-icon" data-toggle="list-editable"><i class="icon wb-edit" aria-hidden="true"></i></span>
                      <span class="btn btn-pure btn-icon" data-toggle="list-delete"><i class="icon wb-trash" aria-hidden="true"></i></span>
                    </div>
                  </div>
                  <div class="list-editable">
                    <div class="form-group form-material">
                      <input type="text" class="form-control empty" name="label" value="Private">
                      <button type="button" class="input-editable-close icon wb-close" data-toggle="list-editable-close" aria-label="Close" aria-expanded="true"></button>
                    </div>
                  </div>
                </div>
                <div class="list-group-item" data-plugin="editlist">
                  <div class="list-content">
                    <span class="item-right">30</span>
                    <span class="list-text">Friends</span>
                    <div class="item-actions">
                      <span class="btn btn-pure btn-icon" data-toggle="list-editable"><i class="icon wb-edit" aria-hidden="true"></i></span>
                      <span class="btn btn-pure btn-icon" data-toggle="list-delete"><i class="icon wb-trash" aria-hidden="true"></i></span>
                    </div>
                  </div>
                  <div class="list-editable">
                    <div class="form-group form-material">
                      <input type="text" class="form-control empty" name="label" value="Friends">
                      <button type="button" class="input-editable-close icon wb-close" data-toggle="list-editable-close" aria-label="Close" aria-expanded="true"></button>
                    </div>
                  </div>
                </div>
                <a id="addLabelToggle" class="list-group-item" href="javascript:void(0)" data-toggle="modal" data-target="#addLabelForm">
                <i class="icon wb-plus" aria-hidden="true"></i> Add New Label
              </a>
              </div>
            </div>
          </div>
        </div>
      <div class="scrollable-bar scrollable-bar-vertical is-disabled scrollable-bar-hide" draggable="false"><div class="scrollable-bar-handle"></div></div></div>
    </div>

    <!-- Contacts Content -->
    <div class="page-main">

      <!-- Contacts Content Header -->
      <div class="page-header">
        <h1 class="page-title">Contact List</h1>
        <div class="page-header-actions">
          <form>
            <div class="input-search input-search-dark">
              <i class="input-search-icon wb-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="" placeholder="Search...">
            </div>
          </form>
        </div>
      </div>

      <!-- Contacts Content -->
      <div id="contactsContent" class="page-content page-content-table" data-plugin="selectable">

        <!-- Actions -->
        <div class="page-content-actions">
          <div class="float-right">
            <div class="dropdown">
              <button type="button" class="btn btn-pure" data-toggle="dropdown" aria-expanded="false">
                More
                <span class="icon wb-chevron-down-mini" aria-hidden="true"></span>
              </button>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="javascript:void(0)">More</a>
                <a class="dropdown-item" href="javascript:void(0)">More</a>
              </div>
            </div>
            <button type="button" class="btn btn-outline btn-default btn-md empty-btn">Empty All</button>
          </div>
          <div class="btn-group">
            <div class="dropdown">
              <button class="btn btn-icon btn-pure btn-default" data-toggle="dropdown" aria-expanded="false" type="button"><i class="icon wb-folder" aria-hidden="true"></i></button>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="javascript:void(0)">work</a>
                <a class="dropdown-item" href="javascript:void(0)">Family</a>
                <a class="dropdown-item" href="javascript:void(0)">Private</a>
                <a class="dropdown-item" href="javascript:void(0)">Friends</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">Trash</a>
                <a class="dropdown-item" href="javascript:void(0)">Spam</a>
              </div>
            </div>
            <div class="dropdown">
              <button class="btn btn-icon btn-pure btn-default" data-toggle="dropdown" aria-expanded="false" type="button"><i class="icon wb-tag" aria-hidden="true"></i></button>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="javascript:void(0)">work</a>
                <a class="dropdown-item" href="javascript:void(0)">Family</a>
                <a class="dropdown-item" href="javascript:void(0)">Private</a>
                <a class="dropdown-item" href="javascript:void(0)">Friends</a>
              </div>
            </div>
          </div>
        </div>


        <!-- Contacts -->
        <table class="table is-indent" data-plugin="animateList" data-animate="fade" data-child="tr" data-selectable="selectable">
          <thead>
            <tr class="animation-fade" style="animation-fill-mode: backwards; animation-duration: 250ms; animation-delay: 0ms;">
              <th class="pre-cell"></th>
              <th class="cell-30" scope="col">
                <span class="checkbox-custom checkbox-primary checkbox-lg contacts-select-all">
                  <input type="checkbox" class="contacts-checkbox selectable-all" id="select_all">
                  <label for="select_all"></label>
                </span>
              </th>
              <th class="cell-300" scope="col">Razón Social</th>
              <th class="cell-300" scope="col">Teléfono</th>
              <th scope="col">Email</th>
              <th class="suf-cell"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($evaluation_economies as $evaluation_economy)
            <tr data-url="panel.tpl" data-toggle="slidePanel" class="animation-fade" style="animation-fill-mode: backwards; animation-duration: 250ms; animation-delay: 50ms;">
              <td class="pre-cell"></td>
              <td class="cell-30">
                <span class="checkbox-custom checkbox-primary checkbox-lg">
                  <input type="checkbox" class="contacts-checkbox selectable-item" id="contacts_1">
                  <label for="contacts_1"></label>
                </span>
              </td>
              <td class="cell-300">
                <a class="avatar" href="javascript:void(0)">
                  <img class="img-fluid" src="{{ assets('images/portrait/1.jpg')}}" alt="...">
                </a>
                {{ $evaluation_economy->foto_expediente_economico}}
              </td>
              <td class="cell-300"></td>
              <td>{{$evaluation_economy->id}}</td>
              <td class="suf-cell"></td>
            </tr>
            @endforeach
          </tbody>
        </table>

        <ul data-plugin="paginator" data-total="50" data-skin="pagination-gap" class="pagination pagination-gap"><li class="pagination-prev page-item disabled"><a class="page-link" href="javascript:void(0)" aria-label="Prev"><span class="icon wb-chevron-left-mini"></span></a></li><li class="pagination-items page-item active" data-value="1"><a class="page-link" href="javascript:void(0)">1</a></li><li class="pagination-items page-item" data-value="2"><a class="page-link" href="javascript:void(0)">2</a></li><li class="pagination-items page-item" data-value="3"><a class="page-link" href="javascript:void(0)">3</a></li><li class="pagination-items page-item" data-value="4"><a class="page-link" href="javascript:void(0)">4</a></li><li class="pagination-items page-item" data-value="5"><a class="page-link" href="javascript:void(0)">5</a></li><li class="pagination-next page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next"><span class="icon wb-chevron-right-mini"></span></a></li></ul>
      </div>
    </div>
  </div>
@endsection 