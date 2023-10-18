<php
class ProfilController extends AbstractController 
{
    #[Route('/profil', name: 'app_profil')]
    public function index(): Response
    {
        return $this->render(view:'profil/index.html.twig', [
            'controller_name'=> 'ProfilController']);
    }

}
?php>