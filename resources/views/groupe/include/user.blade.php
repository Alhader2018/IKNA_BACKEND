

<tr>
                                        <td>Configurer utilisateurs et groupes</td>
                                        <td>
                                            @if ($item->permission =="true")
                                                 <input type="checkbox"  data-toggle="toggle" onchange="enregistrer('user')" checked id="user">
                                            @else
                                                <input type="checkbox"  data-toggle="toggle" onchange="enregistrer('user')" id="user">
                                            @endif
                                        </td>
                                    </tr>