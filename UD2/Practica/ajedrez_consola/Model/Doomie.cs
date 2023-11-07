namespace ChessAPI.Model
{
    public class Doomie : Piece
    {
        public Doomie(ColorEnum color) : base(color)
        {
        }

        public override int GetScore()
        {
            return Config.DoomiePieceValue;
        }
    }
}
