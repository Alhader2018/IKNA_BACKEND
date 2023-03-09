<li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ __('messages.Profil') }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('index_utilisateur') }}">
                                        {{ __('messages.Profil') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('index_groupe') }}">
                                        Groupes
                                    </a>

                                </div>
                            </li>