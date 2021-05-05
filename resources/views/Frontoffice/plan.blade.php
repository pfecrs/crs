@extends('Frontoffice.layout')
@section('content')


<div class="user-grid-toolbar">
    <div class="control has-icon">
        <input class="input custom-text-filter" placeholder="Search..." data-filter-target=".column">
        <div class="form-icon">
            <i data-feather="search"></i>
        </div>
    </div>

    <div class="buttons">
        <div class="field h-hidden-mobile">
            <div class="control">
                <div class="h-select">
                    <div class="select-box">
                        <span>Filter</span>
                    </div>
                    <div class="select-icon">
                        <i data-feather="chevron-down"></i>
                    </div>
                    <div class="select-drop has-slimscroll-sm">
                        <div class="drop-inner">
                            <div class="option-row">
                                <input type="radio" name="grid_filter">
                                <div class="option-meta">
                                    <span>UI/UX Design</span>
                                </div>
                            </div>
                            <div class="option-row">
                                <input type="radio" name="grid_filter">
                                <div class="option-meta">
                                    <span>Web Development</span>
                                </div>
                            </div>
                            <div class="option-row">
                                <input type="radio" name="grid_filter">
                                <div class="option-meta">
                                    <span>Software Engineering</span>
                                </div>
                            </div>
                            <div class="option-row">
                                <input type="radio" name="grid_filter">
                                <div class="option-meta">
                                    <span>Business</span>
                                </div>
                            </div>
                            <div class="option-row">
                                <input type="radio" name="grid_filter">
                                <div class="option-meta">
                                    <span>Product Management</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="button h-button is-primary is-raised">
            <span class="icon">
                    <i class="fas fa-plus"></i>
                </span>
            <span>Add User</span>
        </button>
    </div>
</div>

<div class="page-content-inner">

    <div class="user-grid user-grid-v1">

        <!--List Empty Search Placeholder -->
        <div class="page-placeholder custom-text-filter-placeholder is-hidden">
            <div class="placeholder-content">
                <img class="light-image" src="assets/img/illustrations/placeholders/search-4.svg" alt="" />
                <img class="dark-image" src="assets/img/illustrations/placeholders/search-4-dark.svg" alt="" />
                <h3>We couldn't find any matching results.</h3>
                <p class="is-larger">Too bad. Looks like we couldn't find any matching results for the
                    search terms you've entered. Please try different search terms or criteria.</p>
            </div>
        </div>

        <div class="columns is-multiline">

            <!--Grid item-->
            <div class="column is-3">
                <div class="grid-item">
                    <div class="h-avatar is-big">
                        <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/13.jpg" alt="" data-user-popover="6">
                        <img class="badge" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/icons/stacks/illustrator.svg" alt="">
                    </div>
                    <h3 class="dark-inverted" data-filter-match>Tara Svenson</h3>
                    <p data-filter-match>UI/UX Designer</p>
                    <div class="people">
                        <div class="h-avatar is-small">
                            <span class="avatar is-fake is-warning" data-user-popover="36">
                                    <span>BT</span>
                            </span>
                        </div>
                        <div class="h-avatar is-small">
                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/18.jpg" alt="" data-user-popover="7">
                        </div>
                        <div class="h-avatar is-small">
                            <span class="avatar is-fake is-info" data-user-popover="34">
                                    <span>JD</span>
                            </span>
                        </div>
                        <div class="h-avatar is-small">
                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/7.jpg" alt="" data-user-popover="0">
                        </div>
                    </div>
                    <div class="buttons">
                        <button class="button h-button is-dark-outlined">
                            <span class="icon">
                                    <i data-feather="user"></i>
                                </span>
                            <span>Profile</span>
                        </button>
                        <button class="button h-button is-dark-outlined">
                            <span class="icon">
                                    <i data-feather="message-circle"></i>
                                </span>
                            <span>Talk</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection