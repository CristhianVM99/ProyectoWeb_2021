                </div>
            </div>
        </div>
        <!-- CONTENIDO FOOTER -->
        <footer class="contenedor_pie">
                <div class="pie">
                    &copy; Blog Personal  -  2021
                </div>
        </footer>
    </div>
</body>
<script>
    var btn_user = document.getElementById('btn_user');
    btn_user.addEventListener('click',function(){
        var user_menu=document.getElementById('user_menu');
        if(user_menu.style.visibility=="visible"){
            user_menu.style.visibility = "hidden";
        }else{
            user_menu.style.visibility = "visible";
        }

    });
</script>

</html>