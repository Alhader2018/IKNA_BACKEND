

<tr>
                                        <td>Message medecin</td>
                                        <td>
                                            @if ($item->permission =="true")
                                          
                                                 <input type="checkbox"  data-toggle="toggle" onchange="enregistrer('medecin')" checked id="medecin">
                                            @else
                                                <input type="checkbox"  data-toggle="toggle" onchange="enregistrer('medecin')" id="medecin">
                                            @endif
                                        </td>
                                    </tr>